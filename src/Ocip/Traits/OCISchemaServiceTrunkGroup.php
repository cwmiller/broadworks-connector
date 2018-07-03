<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkDeleteUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkForceAssignUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkDeleteUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkForceAssignUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupAddInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupDeleteInstanceRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableHostedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableHostedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceUserListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceUserListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetResponse14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskDeleteRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupGetRequest14sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupGetResponse14sp1;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupUserCreationTaskGetListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupUserCreationTaskGetListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceTrunkGroup
{

    /**
     * @param EnterpriseEnterpriseTrunkAddRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkAddUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkDeleteUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkForceAssignUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkForceAssignUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkForceAssignUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest $request
     * @return EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetAvailableUserListRequest $request
     * @return EnterpriseEnterpriseTrunkGetAvailableUserListResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetListRequest $request
     * @return EnterpriseEnterpriseTrunkGetListResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetRequest21 $request
     * @return EnterpriseEnterpriseTrunkGetResponse21|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetUserListRequest $request
     * @return EnterpriseEnterpriseTrunkGetUserListResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function enterpriseEnterpriseTrunkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkAddRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkAddUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkDeleteUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkForceAssignUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkForceAssignUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkForceAssignUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest $request
     * @return GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkGetAvailableTrunkGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetAvailableUserListRequest $request
     * @return GroupEnterpriseTrunkGetAvailableUserListResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetListRequest $request
     * @return GroupEnterpriseTrunkGetListResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetRequest21 $request
     * @return GroupEnterpriseTrunkGetResponse21|ErrorResponse
     */
    public function groupEnterpriseTrunkGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetUserListRequest $request
     * @return GroupEnterpriseTrunkGetUserListResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupEnterpriseTrunkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupAddInstanceRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupAddInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupAddInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupDeleteInstanceRequest14sp4 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupDeleteInstanceRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupDeleteInstanceRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetAvailableHostedUserListRequest $request
     * @return GroupTrunkGroupGetAvailableHostedUserListResponse|ErrorResponse
     */
    public function groupTrunkGroupGetAvailableHostedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableHostedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetInstanceListRequest14sp4 $request
     * @return GroupTrunkGroupGetInstanceListResponse14sp4|ErrorResponse
     */
    public function groupTrunkGroupGetInstanceListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceListRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetInstanceRequest21 $request
     * @return GroupTrunkGroupGetInstanceResponse21|ErrorResponse
     */
    public function groupTrunkGroupGetInstanceRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetInstanceUserListRequest14sp4 $request
     * @return GroupTrunkGroupGetInstanceUserListResponse14sp4|ErrorResponse
     */
    public function groupTrunkGroupGetInstanceUserListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceUserListRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetRequest14sp9 $request
     * @return GroupTrunkGroupGetResponse14sp9|ErrorResponse
     */
    public function groupTrunkGroupGetRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupModifyInstanceRequest20sp1 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupModifyInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupModifyRequest14sp9 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupModifyRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskAddRequest14sp4 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupUserCreationTaskAddRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskDeleteRequest14sp4 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupTrunkGroupUserCreationTaskDeleteRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskDeleteRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskGetListRequest14sp4 $request
     * @return GroupTrunkGroupUserCreationTaskGetListResponse14sp4|ErrorResponse
     */
    public function groupTrunkGroupUserCreationTaskGetListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetListRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskGetRequest14sp4 $request
     * @return GroupTrunkGroupUserCreationTaskGetResponse14sp4|ErrorResponse
     */
    public function groupTrunkGroupUserCreationTaskGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderTrunkGroupGetRequest14sp1 $request
     * @return ServiceProviderTrunkGroupGetResponse14sp1|ErrorResponse
     */
    public function serviceProviderTrunkGroupGetRequest14sp1(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupGetRequest14sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderTrunkGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderTrunkGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupGetRequest22 $request
     * @return SystemTrunkGroupGetResponse22|ErrorResponse
     */
    public function systemTrunkGroupGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemTrunkGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest $request
     * @return SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse|ErrorResponse
     */
    public function systemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupUserCreationTaskGetListRequest14sp4 $request
     * @return SystemTrunkGroupUserCreationTaskGetListResponse14sp4|ErrorResponse
     */
    public function systemTrunkGroupUserCreationTaskGetListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupUserCreationTaskGetListRequest14sp4 $request)
    {
        return $this->call($request);
    }


}

