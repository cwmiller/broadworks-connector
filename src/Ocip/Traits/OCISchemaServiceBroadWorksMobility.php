<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse22;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse22;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityGetRequest22V4;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityGetResponse22V4;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityGetRequest22V3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityGetResponse22V3;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityAddIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityDeleteIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetIMRNListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetRequest22V3;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetResponse22V3;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityModifyRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeAddRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeGetListRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeGetListResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeModifyRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityAddRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityConsolidatedAddRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityConsolidatedDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityConsolidatedModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest22V3;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetResponse22V3;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest21;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceBroadWorksMobility
{

    /**
     * @param EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request
     * @return EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22 $request
     * @return EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22 $request
     * @return EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22 $request
     * @return EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityGetRequest22V4 $request
     * @return GroupBroadWorksMobilityGetResponse22V4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksMobilityGetRequest22V4(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityGetRequest22V4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request
     * @return GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request
     * @return GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupBroadWorksMobilityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityGetRequest22V3 $request
     * @return ServiceProviderBroadWorksMobilityGetResponse22V3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksMobilityGetRequest22V3(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityGetRequest22V3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request
     * @return ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request
     * @return ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksMobilityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityAddIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityAddIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityAddIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityAddMobileNetworkIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityDeleteIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityDeleteIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityDeleteIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolGetListRequest $request
     * @return SystemBroadWorksMobilityGeographicalPoolGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolIMRNAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolIMRNAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolIMRNDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolIMRNDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest $request
     * @return SystemBroadWorksMobilityGeographicalPoolIMRNGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolIMRNGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolPrefixAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolPrefixAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolPrefixDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolPrefixDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGeographicalPoolPrefixGetListRequest $request
     * @return SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGeographicalPoolPrefixGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGeographicalPoolPrefixGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGetIMRNListRequest $request
     * @return SystemBroadWorksMobilityGetIMRNListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGetIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest $request
     * @return SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGetMobileNetworkIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGetRequest22V3 $request
     * @return SystemBroadWorksMobilityGetResponse22V3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityGetRequest22V3(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetRequest22V3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityMobileNetworkAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityMobileNetworkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkGetListRequest $request
     * @return SystemBroadWorksMobilityMobileNetworkGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityMobileNetworkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkGetRequest $request
     * @return SystemBroadWorksMobilityMobileNetworkGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityMobileNetworkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityMobileNetworkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request
     * @return SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityModifyRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeAddRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeDeleteRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeGetListRequest21 $request
     * @return SystemBroadWorksMobilityServiceAccessCodeGetListResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListGetListRequest $request
     * @return SystemBroadWorksMobilityServiceAccessCodeListGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest $request
     * @return SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListUsageGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBroadWorksMobilityServiceAccessCodeModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeModifyRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityGetRequest21sp1 $request
     * @return UserBroadWorksMobilityGetResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityAddRequest22V2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityAddRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityAddRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityConsolidatedAddRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityConsolidatedAddRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityConsolidatedAddRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityConsolidatedDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityConsolidatedDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityConsolidatedDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityConsolidatedModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityConsolidatedModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityConsolidatedModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityGetRequest22V3 $request
     * @return UserBroadWorksMobilityMobileIdentityGetResponse22V3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityGetRequest22V3(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest22V3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityMobileIdentityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksMobilityModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest21 $request)
    {
        return $this->call($request);
    }


}

