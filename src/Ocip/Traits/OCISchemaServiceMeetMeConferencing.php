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
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceMeetMeConferencing
{

    /**
     * @param GroupMeetMeConferencingAddInstanceRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMeetMeConferencingAddInstanceRequest19(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingAddInstanceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMeetMeConferencingDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetAvailableUserListRequest $request
     * @return GroupMeetMeConferencingGetAvailableUserListResponse|ErrorResponse
     */
    public function groupMeetMeConferencingGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetInstanceListRequest $request
     * @return GroupMeetMeConferencingGetInstanceListResponse|ErrorResponse
     */
    public function groupMeetMeConferencingGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetInstanceRequest19sp1 $request
     * @return GroupMeetMeConferencingGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupMeetMeConferencingGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingGetRequest $request
     * @return GroupMeetMeConferencingGetResponse|ErrorResponse
     */
    public function groupMeetMeConferencingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMeetMeConferencingModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMeetMeConferencingModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMeetMeConferencingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupMeetMeConferencingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMeetMeConferencingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMeetMeConferencingGetRequest $request
     * @return ServiceProviderMeetMeConferencingGetResponse|ErrorResponse
     */
    public function serviceProviderMeetMeConferencingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMeetMeConferencingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderMeetMeConferencingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMeetMeConferencingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMeetMeConferencingGetRequest19 $request
     * @return SystemMeetMeConferencingGetResponse19|ErrorResponse
     */
    public function systemMeetMeConferencingGetRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingGetRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMeetMeConferencingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemMeetMeConferencingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMeetMeConferencingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingAddConferenceRequest19 $request
     * @return UserMeetMeConferencingAddConferenceResponse19|ErrorResponse
     */
    public function userMeetMeConferencingAddConferenceRequest19(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingAddConferenceRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingDeleteConferenceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMeetMeConferencingDeleteConferenceListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingDeleteConferenceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingDeleteConferenceRecordingListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMeetMeConferencingDeleteConferenceRecordingListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingDeleteConferenceRecordingListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetAvailableDelegateListRequest $request
     * @return UserMeetMeConferencingGetAvailableDelegateListResponse|ErrorResponse
     */
    public function userMeetMeConferencingGetAvailableDelegateListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetAvailableDelegateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetBridgeListRequest $request
     * @return UserMeetMeConferencingGetBridgeListResponse|ErrorResponse
     */
    public function userMeetMeConferencingGetBridgeListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetBridgeListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceDelegateListRequest $request
     * @return UserMeetMeConferencingGetConferenceDelegateListResponse|ErrorResponse
     */
    public function userMeetMeConferencingGetConferenceDelegateListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceDelegateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceGreetingRequest20 $request
     * @return UserMeetMeConferencingGetConferenceGreetingResponse20|ErrorResponse
     */
    public function userMeetMeConferencingGetConferenceGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceListRequest $request
     * @return UserMeetMeConferencingGetConferenceListResponse|ErrorResponse
     */
    public function userMeetMeConferencingGetConferenceListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceRecordingListRequest $request
     * @return UserMeetMeConferencingGetConferenceRecordingListResponse|ErrorResponse
     */
    public function userMeetMeConferencingGetConferenceRecordingListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRecordingListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingGetConferenceRequest20 $request
     * @return UserMeetMeConferencingGetConferenceResponse20|ErrorResponse
     */
    public function userMeetMeConferencingGetConferenceRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingGetConferenceRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceDelegateListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMeetMeConferencingModifyConferenceDelegateListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceDelegateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceGreetingRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMeetMeConferencingModifyConferenceGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMeetMeConferencingModifyConferenceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userMeetMeConferencingModifyConferenceRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMeetMeConferencingModifyConferenceRequest $request)
    {
        return $this->call($request);
    }


}

