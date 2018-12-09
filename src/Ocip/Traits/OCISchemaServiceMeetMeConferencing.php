<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingAddInstanceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingGetRequest19;
use CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingGetResponse19;
use CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingAddConferenceRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingAddConferenceResponse19;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingDeleteConferenceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingDeleteConferenceRecordingListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetAvailableDelegateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetAvailableDelegateListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetBridgeListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetBridgeListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceDelegateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceDelegateListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceGreetingRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceGreetingResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRecordingListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRecordingListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceDelegateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceGreetingRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceMeetMeConferencing
{

    /**
     * @param GroupMeetMeConferencingAddInstanceRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetAvailableUserListRequest $request
     * @return GroupMeetMeConferencingGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetInstanceListRequest $request
     * @return GroupMeetMeConferencingGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetInstanceRequest19sp1 $request
     * @return GroupMeetMeConferencingGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetRequest $request
     * @return GroupMeetMeConferencingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMeetMeConferencingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMeetMeConferencingGetRequest $request
     * @return ServiceProviderMeetMeConferencingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMeetMeConferencingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMeetMeConferencingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderMeetMeConferencingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMeetMeConferencingGetRequest19 $request
     * @return SystemMeetMeConferencingGetResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMeetMeConferencingGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMeetMeConferencingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMeetMeConferencingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingAddConferenceRequest19 $request
     * @return UserMeetMeConferencingAddConferenceResponse19
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingAddConferenceRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingAddConferenceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingDeleteConferenceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingDeleteConferenceListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingDeleteConferenceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingDeleteConferenceRecordingListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingDeleteConferenceRecordingListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingDeleteConferenceRecordingListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetAvailableDelegateListRequest $request
     * @return UserMeetMeConferencingGetAvailableDelegateListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetAvailableDelegateListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetAvailableDelegateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetBridgeListRequest $request
     * @return UserMeetMeConferencingGetBridgeListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetBridgeListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetBridgeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceDelegateListRequest $request
     * @return UserMeetMeConferencingGetConferenceDelegateListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetConferenceDelegateListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceDelegateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceGreetingRequest20 $request
     * @return UserMeetMeConferencingGetConferenceGreetingResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetConferenceGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceListRequest $request
     * @return UserMeetMeConferencingGetConferenceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetConferenceListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceRecordingListRequest $request
     * @return UserMeetMeConferencingGetConferenceRecordingListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetConferenceRecordingListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRecordingListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceRequest20 $request
     * @return UserMeetMeConferencingGetConferenceResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingGetConferenceRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceDelegateListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingModifyConferenceDelegateListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceDelegateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceGreetingRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingModifyConferenceGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMeetMeConferencingModifyConferenceRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceRequest $request)
    {
        return $this->call($request);
    }


}

