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
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseLocalGatewayGetPagedSortedListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseLocalGatewayGetPagedSortedListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseLocalGatewayGetUsageRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseLocalGatewayGetUsageResponse;
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
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupAddInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupDeleteInstanceRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableHostedUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableHostedUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceResponse23;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceUserListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceUserListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyInstanceRequest20sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyRequest14sp9;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskDeleteRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetListResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnterpriseTrunkGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnterpriseTrunkGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemEnterpriseTrunkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetRequest24;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetResponse24;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupUserCreationTaskGetListRequest14sp4;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupUserCreationTaskGetListResponse14sp4;

trait OCISchemaServiceTrunkGroup
{

    /**
     * @param EnterpriseEnterpriseTrunkAddRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkAddUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkDeleteUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkForceAssignUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkForceAssignUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkForceAssignUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest $request
     * @return EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetAvailableUserListRequest $request
     * @return EnterpriseEnterpriseTrunkGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetListRequest $request
     * @return EnterpriseEnterpriseTrunkGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetRequest22 $request
     * @return EnterpriseEnterpriseTrunkGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkGetUserListRequest $request
     * @return EnterpriseEnterpriseTrunkGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseEnterpriseTrunkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseEnterpriseTrunkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseLocalGatewayGetPagedSortedListRequest $request
     * @return EnterpriseLocalGatewayGetPagedSortedListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseLocalGatewayGetPagedSortedListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseLocalGatewayGetPagedSortedListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseLocalGatewayGetUsageRequest $request
     * @return EnterpriseLocalGatewayGetUsageResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseLocalGatewayGetUsageRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseLocalGatewayGetUsageRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkAddRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkAddUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkDeleteUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkForceAssignUserListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkForceAssignUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkForceAssignUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest $request
     * @return GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkGetAvailableTrunkGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetAvailableUserListRequest $request
     * @return GroupEnterpriseTrunkGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetListRequest $request
     * @return GroupEnterpriseTrunkGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetRequest22 $request
     * @return GroupEnterpriseTrunkGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkGetUserListRequest $request
     * @return GroupEnterpriseTrunkGetUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupEnterpriseTrunkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupEnterpriseTrunkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupEnterpriseTrunkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupAddInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupAddInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupAddInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupDeleteInstanceRequest14sp4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupDeleteInstanceRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupDeleteInstanceRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetAvailableHostedUserListRequest $request
     * @return GroupTrunkGroupGetAvailableHostedUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupGetAvailableHostedUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetAvailableHostedUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetInstanceListRequest14sp4 $request
     * @return GroupTrunkGroupGetInstanceListResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupGetInstanceListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceListRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetInstanceRequest23 $request
     * @return GroupTrunkGroupGetInstanceResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupGetInstanceRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetInstanceUserListRequest14sp4 $request
     * @return GroupTrunkGroupGetInstanceUserListResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupGetInstanceUserListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetInstanceUserListRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupGetRequest23 $request
     * @return GroupTrunkGroupGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupModifyInstanceRequest20sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupModifyInstanceRequest20sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyInstanceRequest20sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupModifyRequest14sp9 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupModifyRequest14sp9(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupModifyRequest14sp9 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskAddRequest14sp4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupUserCreationTaskAddRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskDeleteRequest14sp4 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupUserCreationTaskDeleteRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskDeleteRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskGetListRequest14sp4 $request
     * @return GroupTrunkGroupUserCreationTaskGetListResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupUserCreationTaskGetListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetListRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupTrunkGroupUserCreationTaskGetRequest14sp4 $request
     * @return GroupTrunkGroupUserCreationTaskGetResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupTrunkGroupUserCreationTaskGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderTrunkGroupGetRequest23 $request
     * @return ServiceProviderTrunkGroupGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderTrunkGroupGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderTrunkGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderTrunkGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderTrunkGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnterpriseTrunkGetRequest $request
     * @return SystemEnterpriseTrunkGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnterpriseTrunkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEnterpriseTrunkGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemEnterpriseTrunkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemEnterpriseTrunkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemEnterpriseTrunkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupGetRequest24 $request
     * @return SystemTrunkGroupGetResponse24
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTrunkGroupGetRequest24(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupGetRequest24 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTrunkGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest $request
     * @return SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemTrunkGroupUserCreationTaskGetListRequest14sp4 $request
     * @return SystemTrunkGroupUserCreationTaskGetListResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemTrunkGroupUserCreationTaskGetListRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\SystemTrunkGroupUserCreationTaskGetListRequest14sp4 $request)
    {
        return $this->call($request);
    }


}

