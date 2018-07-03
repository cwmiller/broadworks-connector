<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeAddInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceResponse20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeModifyInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateGetRequest20sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateGetResponse20sp1;
use CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateModifyRequest20sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateBridgeGetRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateBridgeGetResponse20sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateDeleteRoomRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomAddResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaboratInstantRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaboratMyRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomAddResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaboratProjectRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaboratetRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomIDRegenerateRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomIDRegenerateResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomListGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomListGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCollaborate
{

    /**
     * @param GroupCollaborateBridgeAddInstanceRequest20sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCollaborateBridgeAddInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeAddInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeConsolidatedAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCollaborateBridgeConsolidatedAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeConsolidatedDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCollaborateBridgeConsolidatedDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeConsolidatedModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCollaborateBridgeConsolidatedModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCollaborateBridgeDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetAvailableUserListRequest $request
     * @return GroupCollaborateBridgeGetAvailableUserListResponse|ErrorResponse
     */
    public function groupCollaborateBridgeGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetInstanceListRequest $request
     * @return GroupCollaborateBridgeGetInstanceListResponse|ErrorResponse
     */
    public function groupCollaborateBridgeGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetInstanceRequest20sp1 $request
     * @return GroupCollaborateBridgeGetInstanceResponse20sp1|ErrorResponse
     */
    public function groupCollaborateBridgeGetInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeModifyInstanceRequest20sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCollaborateBridgeModifyInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeModifyInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCollaborateGetRequest20sp1V2 $request
     * @return SystemCollaborateGetResponse20sp1|ErrorResponse
     */
    public function systemCollaborateGetRequest20sp1V2(\CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateGetRequest20sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCollaborateModifyRequest20sp1V2 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCollaborateModifyRequest20sp1V2(\CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateModifyRequest20sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateBridgeGetRequest20sp1 $request
     * @return UserCollaborateBridgeGetResponse20sp1
     */
    public function userCollaborateBridgeGetRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateBridgeGetRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateDeleteRoomRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCollaborateDeleteRoomRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateDeleteRoomRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomAddRequest $request
     * @return UserCollaborateInstantRoomAddResponse|ErrorResponse
     */
    public function userCollaborateInstantRoomAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomGetRequest $request
     * @return UserCollaboratInstantRoomGetResponse
     */
    public function userCollaborateInstantRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomParametersGetRequest $request
     * @return UserCollaborateInstantRoomParametersGetResponse
     */
    public function userCollaborateInstantRoomParametersGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomParametersModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCollaborateInstantRoomParametersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateMyRoomGetRequest $request
     * @return UserCollaboratMyRoomGetResponse
     */
    public function userCollaborateMyRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateMyRoomModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCollaborateMyRoomModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateProjectRoomAddRequest $request
     * @return UserCollaborateProjectRoomAddResponse|ErrorResponse
     */
    public function userCollaborateProjectRoomAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateProjectRoomGetRequest $request
     * @return UserCollaboratProjectRoomGetResponse
     */
    public function userCollaborateProjectRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateProjectRoomModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCollaborateProjectRoomModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomGetRequest $request
     * @return UserCollaboratetRoomGetResponse
     */
    public function userCollaborateRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomIDRegenerateRequest $request
     * @return UserCollaborateRoomIDRegenerateResponse
     */
    public function userCollaborateRoomIDRegenerateRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomIDRegenerateRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomListGetRequest $request
     * @return UserCollaborateRoomListGetResponse
     */
    public function userCollaborateRoomListGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomListGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCollaborateRoomModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomModifyRequest $request)
    {
        return $this->call($request);
    }


}

