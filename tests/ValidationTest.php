<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName;
use CWM\BroadWorksConnector\Ocip\Models\SearchMode;
use CWM\BroadWorksConnector\Ocip\Models\SystemGetRegistrationContactListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest16Endpoint;
use CWM\BroadWorksConnector\Ocip\Validation\Validator;

class ValidationTest extends \PHPUnit\Framework\TestCase
{
    public function testRequirementMissing()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');

        $request = new LoginRequest14sp4();
        Validator::validate($request);
    }

    public function testRequirementMet()
    {
        $request = (new LoginRequest14sp4())
            ->setUserId('username');

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testRequirementWithArrayNotMet()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');

        $request = (new GroupCommunicationBarringAuthorizationCodeAddListRequest())
            ->setServiceProviderId('SID')
            ->setGroupId('GID');

        Validator::validate($request);
    }

    public function testRequirementWithArrayMet()
    {
        $request = (new GroupCommunicationBarringAuthorizationCodeAddListRequest())
            ->setServiceProviderId('SID')
            ->setGroupId('GID')
            ->setCode(['ABC']);

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testChoiceNotMet()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\ChoiceNotSetException');

        $request = new UserModifyRequest16Endpoint();

        Validator::validate($request);
    }

    public function testMultipleChoiceSelections()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');

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
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');

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

    public function testChoiceWithUnsetArrays()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\ChoiceNotSetException');

        $request = (new GroupCallCenterAddAgentListRequest())
            ->setServiceUserId('test@test.com');

        Validator::validate($request);
    }

    public function testChoiceWithEmptyArrays()
    {
        $request = (new GroupCallCenterAddAgentListRequest())
            ->setServiceUserId('test@test.com')
            ->setAgentUserId(['user@test.com']);

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testChoiceWithSetArrays()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');

        $request = (new GroupCallCenterAddAgentListRequest())
            ->setServiceUserId('test@test.com')
            ->setAgentUserId(['user@test.com'])
            ->setAgentSkillList([
                (new CallCenterSkillAgentList())
                    ->setAgent(['test'])
                    ->setSkillLevel(1)
            ]);

        Validator::validate($request);
    }

    public function testOptionalGroup()
    {
        $request = new SystemGetRegistrationContactListRequest();

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testIncompleteObjectInArray()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');

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

    private function expect($exceptionName)
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException($exceptionName);
        } else {
            $this->setExpectedException($exceptionName);
        }
    }
}