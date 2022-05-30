<?php

namespace CWM\BroadWorksConnector\Tests;

use CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList;
use CWM\BroadWorksConnector\Ocip\Models\CallForwardingService;
use CWM\BroadWorksConnector\Ocip\Models\FaxMessagingMenuKeysModifyEntry;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterAddAgentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCommunicationBarringAuthorizationCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupUserCallForwardingSettingsGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\LoginRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress;
use CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName;
use CWM\BroadWorksConnector\Ocip\Models\SearchMode;
use CWM\BroadWorksConnector\Ocip\Models\SortByExtension;
use CWM\BroadWorksConnector\Ocip\Models\SystemExtensionLengthModifyRequest;
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

    public function testRequirementInParentClass()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\FieldNotSetException');

        $request = (new GroupUserCallForwardingSettingsGetListRequest())
            ->setServiceProviderId('SP')
            ->setGroupId('GRO')
            ->setCallForwardingService(CallForwardingService::CALL_FORWARDING_ALWAYS())
            ->setResponsePagingControl((new ResponsePagingControl())
                ->setResponseStartIndex(1)
                ->setResponsePageSize(10))
            ->setSortByExtension(new SortByExtension());

        Validator::validate($request);
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

    public function testLengthFailure()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\LengthException');

        $entry = (new FaxMessagingMenuKeysModifyEntry())
            ->setSaveFaxMessageAndSkipToNext('11');

        Validator::validate($entry);
    }


    public function testMinLengthFailure()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\MinLengthException');

        $request = (new LoginRequest14sp4())
            ->setUserId('');

        Validator::validate($request);
    }

    public function testMinLengthSuccess()
    {
        $request = (new LoginRequest14sp4())
            ->setUserId('a');

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testMaxLengthFailure()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\MaxLengthException');

        $request = (new LoginRequest14sp4())
            ->setUserId(str_repeat('a', 162));

        Validator::validate($request);
    }

    public function testMaxLengthSuccess()
    {
        $request = (new LoginRequest14sp4())
            ->setUserId(str_repeat('a', 161));

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testPatternFailure()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\PatternException');

        $entry = (new FaxMessagingMenuKeysModifyEntry())
            ->setSaveFaxMessageAndSkipToNext('A');

        Validator::validate($entry);
    }

    public function testPatternSuccess()
    {
        $entry = (new FaxMessagingMenuKeysModifyEntry())
            ->setSaveFaxMessageAndSkipToNext('#');

        $this->assertEquals(true, Validator::validate($entry));
    }

    public function testMinInclusiveFailure()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\MinInclusiveException');

        $request = (new SystemExtensionLengthModifyRequest())
            ->setMinExtensionLength(1)
            ->setMaxExtensionLength(1);

        Validator::validate($request);
    }

    public function testMinInclusiveSuccess()
    {
        $request = (new SystemExtensionLengthModifyRequest())
            ->setMinExtensionLength(3)
            ->setMaxExtensionLength(3);

        $this->assertEquals(true, Validator::validate($request));
    }

    public function testMaxInclusiveFailure()
    {
        $this->expect('CWM\BroadWorksConnector\Ocip\Validation\MaxInclusiveException');

        $request = (new SystemExtensionLengthModifyRequest())
            ->setMinExtensionLength(21)
            ->setMaxExtensionLength(21);

        Validator::validate($request);
    }

    public function testMaxInclusiveSuccess()
    {
        $request = (new SystemExtensionLengthModifyRequest())
            ->setMinExtensionLength(20)
            ->setMaxExtensionLength(20);

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