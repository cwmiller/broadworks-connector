<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\Models\C\OCIMessage;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\LoginType;
use CWM\BroadWorksConnector\Ocip\Models\SystemGetRegistrationContactListRequest;
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

        $instance = new LoginRequest14sp4();
        Validator::validate($instance);
    }

    public function testRequirementMet()
    {
        $instance = (new LoginRequest14sp4())
            ->setUserId('username');

        $this->assertEquals(true, Validator::validate($instance));
    }

    public function testChoiceNotMet()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\ChoiceNotSetException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\ChoiceNotSetException');
        }

        $instance = new UserModifyRequest16Endpoint();

        Validator::validate($instance);
    }

    public function testMultipleChoiceSelections()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        }

        $instance = (new SystemGetRegistrationContactListRequest())
            ->setResellerId('reseller')
            ->setServiceProviderId('serviceProvider');

        Validator::validate($instance);
    }

    public function testSequenceSetInChoice()
    {
        $instance = (new SystemGetRegistrationContactListRequest())
            ->setGroupId('group');

        $this->assertEquals(true, Validator::validate($instance));
    }

    public function testMultipleChoiceWithSequenceSequence()
    {
        // setExpectedException is gone from phpunit 5
        if (method_exists($this, 'expectException')) {
            $this->expectException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        } else {
            $this->setExpectedException('CWM\BroadWorksConnector\Ocip\Validation\InvalidChoiceException');
        }

        $instance = (new SystemGetRegistrationContactListRequest())
            ->setGroupId('group')
            ->setResellerId('reseller');

        Validator::validate($instance);
    }

    public function testOptionalGroup()
    {
        $instance = new SystemGetRegistrationContactListRequest();

        $this->assertEquals(true, Validator::validate($instance));
    }
}