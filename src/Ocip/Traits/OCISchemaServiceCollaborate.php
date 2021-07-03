<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeAddInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstancePagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstancePagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceResponse20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeModifyInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCollaborateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCollaborateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCollaborateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateGetRequest20sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateGetResponse20sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateModifyRequest20sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateBridgeGetRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateBridgeGetResponse20sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateDeleteRoomRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomAddResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomAddResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomIDRegenerateRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomIDRegenerateResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomListGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomListGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCollaborate
{

    /**
     * @param GroupCollaborateBridgeAddInstanceRequest20sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeAddInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeAddInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeConsolidatedAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeConsolidatedAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeConsolidatedDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeConsolidatedDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeConsolidatedModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeConsolidatedModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeConsolidatedModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetAvailableUserListRequest $request
     * @return GroupCollaborateBridgeGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetAvailableUserPagedSortedListRequest $request
     * @return GroupCollaborateBridgeGetAvailableUserPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeGetAvailableUserPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetAvailableUserPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetInstanceListRequest $request
     * @return GroupCollaborateBridgeGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetInstancePagedSortedListRequest $request
     * @return GroupCollaborateBridgeGetInstancePagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeGetInstancePagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstancePagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeGetInstanceRequest20sp1 $request
     * @return GroupCollaborateBridgeGetInstanceResponse20sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeGetInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeGetInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCollaborateBridgeModifyInstanceRequest20sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCollaborateBridgeModifyInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupCollaborateBridgeModifyInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCollaborateGetRequest $request
     * @return ResellerCollaborateGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCollaborateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCollaborateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCollaborateModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCollaborateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCollaborateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCollaborateGetRequest20sp1V2 $request
     * @return SystemCollaborateGetResponse20sp1V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCollaborateGetRequest20sp1V2(\CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateGetRequest20sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCollaborateModifyRequest20sp1V2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCollaborateModifyRequest20sp1V2(\CWM\BroadWorksConnector\Ocip\Models\SystemCollaborateModifyRequest20sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateBridgeGetRequest20sp1 $request
     * @return UserCollaborateBridgeGetResponse20sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateBridgeGetRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateBridgeGetRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateDeleteRoomRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateDeleteRoomRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateDeleteRoomRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomAddRequest $request
     * @return UserCollaborateInstantRoomAddResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateInstantRoomAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomGetRequest $request
     * @return UserCollaborateInstantRoomGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateInstantRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomParametersGetRequest $request
     * @return UserCollaborateInstantRoomParametersGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateInstantRoomParametersGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateInstantRoomParametersModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateInstantRoomParametersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateInstantRoomParametersModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateMyRoomGetRequest $request
     * @return UserCollaborateMyRoomGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateMyRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateMyRoomModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateMyRoomModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateMyRoomModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateProjectRoomAddRequest $request
     * @return UserCollaborateProjectRoomAddResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateProjectRoomAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateProjectRoomGetRequest $request
     * @return UserCollaborateProjectRoomGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateProjectRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateProjectRoomModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateProjectRoomModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateProjectRoomModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomGetRequest $request
     * @return UserCollaborateRoomGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateRoomGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomIDRegenerateRequest $request
     * @return UserCollaborateRoomIDRegenerateResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateRoomIDRegenerateRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomIDRegenerateRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomListGetRequest $request
     * @return UserCollaborateRoomListGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateRoomListGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomListGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCollaborateRoomModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCollaborateRoomModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCollaborateRoomModifyRequest $request)
    {
        return $this->call($request);
    }


}

