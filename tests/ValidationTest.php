<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\Models\C\OCIMessage;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginType;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName;
use CWM\BroadWorksConnector\Ocip\Models\SearchMode;
use CWM\BroadWorksConnector\Ocip\Models\SystemGetRegistrationContactListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest16Endpoint;
use CWM\BroadWorksConnector\Ocip\Validation\Validator;
use CWM\BroadWorksConnector\XmlUtils;
use DOMDocument;

class ValidationTest extends \PHPUnit\Framework\TestCase
{
    public function testRequirementMissing()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');
        }

        $request = new LoginRequest14sp4();
        Validator::validate($request);
    }

    public function testRequirementMet()
    {
        $request = (new LoginRequest14sp4())
            ->setUserId('username');

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testChoiceNotMet()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\ChoiceNotSetException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\ChoiceNotSetException');
        }

        $request = new UserModifyRequest16Endpoint();

        Validator::validate($request);
    }

    public function testMultipleChoiceSelections()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        }

        $request = (new SystemGetRegistrationContactListRequest())
            ->setResellerId('reseller')
            ->setServiceProviderId('serviceProvider');

        Validator::validate($request);
    }

    public function testSequenceSetInChoice()
    {
        $request = (new SystemGetRegistrationContactListRequest())
            ->setGroupId('group');

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testMultipleChoiceWithSequenceSequence()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        }

        $request = (new SystemGetRegistrationContactListRequest())
            ->setGroupId('group')
            ->setResellerId('reseller');

        Validator::validate($request);
    }

    public function testChoiceWithOptionalMembers()
    {
        $request = (new UserAddRequest21())
            ->setServiceProviderId('SP')
            ->setGroupId('GR')
            ->setUserId('user@test.com')
            ->setFirstName('John')
            ->setLastName('Doe')
            ->setCallingLineIdFirstName('John')
            ->setCallingLineIdLastName('Doe');

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testOptionalGroup()
    {
        $request = new SystemGetRegistrationContactListRequest();

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testIncompleteObjectInArray()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');
        }

        $request = (new GroupAccessDeviceGetListRequest())
            ->setServiceProviderId('SP')
            ->setGroupId('G')
            ->setSearchCriteriaDeviceMACAddress(
                [(new SearchCriteriaDeviceMACAddress())
                    ->setValue('000000000000')]);

        Validator::validate($request);
    }

    public function testCompletedObjectsInArray()
    {
        $request = (new GroupAccessDeviceGetListRequest())
            ->setServiceProviderId('SP')
            ->setGroupId('G')
            ->setSearchCriteriaDeviceMACAddress(
                [
                    (new SearchCriteriaDeviceMACAddress())
                    ->setIsCaseInsensitive(false)
                    ->setMode(SearchMode::EQUAL_TO())
                    ->setValue('000000000000'),
                    (new SearchCriteriaDeviceName())
                        ->setIsCaseInsensitive(false)
                        ->setMode(SearchMode::EQUAL_TO())
                        ->setValue('test')
                ]);

        $this->assertEquals(true, Validator::validate($request));
    }
}