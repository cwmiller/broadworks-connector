<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityGetResponse22;
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
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetIMRNListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetResponse22;
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
use CWM\BroadWorksConnector\Ocip\Models\UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityAddRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest21sp1V2;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest21;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceBroadWorksMobility
{

    /**
     * @param EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request
     * @return EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
     * @throws ErrorResponseException
     */
    public function enterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request
     * @return EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
     * @throws ErrorResponseException
     */
    public function enterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityGetRequest22 $request
     * @return GroupBroadWorksMobilityGetResponse22
     * @throws ErrorResponseException
     */
    public function groupBroadWorksMobilityGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request
     * @return GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
     * @throws ErrorResponseException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request
     * @return GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
     * @throws ErrorResponseException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityMobileSubscriberDirectoryNumberUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupBroadWorksMobilityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupBroadWorksMobilityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupBroadWorksMobilityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityGetRequest22 $request
     * @return ServiceProviderBroadWorksMobilityGetResponse22
     * @throws ErrorResponseException
     */
    public function serviceProviderBroadWorksMobilityGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request
     * @return ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request
     * @return ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksMobilityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderBroadWorksMobilityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksMobilityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityAddIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityAddIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityAddIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityAddMobileNetworkIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityDeleteIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityDeleteIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityDeleteIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGetIMRNListRequest $request
     * @return SystemBroadWorksMobilityGetIMRNListResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityGetIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest $request
     * @return SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityGetMobileNetworkIMRNListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityGetRequest22 $request
     * @return SystemBroadWorksMobilityGetResponse22
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityMobileNetworkAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityMobileNetworkDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkGetListRequest $request
     * @return SystemBroadWorksMobilityMobileNetworkGetListResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityMobileNetworkGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkGetRequest $request
     * @return SystemBroadWorksMobilityMobileNetworkGetResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityMobileNetworkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileNetworkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityMobileNetworkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileNetworkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request
     * @return SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityModifyRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeAddRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeAddRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeAddRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeDeleteRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeDeleteRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeGetListRequest21 $request
     * @return SystemBroadWorksMobilityServiceAccessCodeGetListResponse21
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeGetListRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeGetListRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListGetListRequest $request
     * @return SystemBroadWorksMobilityServiceAccessCodeListGetListResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest $request
     * @return SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeListUsageGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBroadWorksMobilityServiceAccessCodeModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBroadWorksMobilityServiceAccessCodeModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemBroadWorksMobilityServiceAccessCodeModifyRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadworksMobilityAddMobileIdentityUsingSharedCallAppearanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityGetRequest21sp1 $request
     * @return UserBroadWorksMobilityGetResponse21sp1
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityGetRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityGetRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityAddRequest21sp1 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityAddRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityAddRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityDeleteRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityGetRequest21sp1V2 $request
     * @return UserBroadWorksMobilityMobileIdentityGetResponse21sp1
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityGetRequest21sp1V2(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityGetRequest21sp1V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityMobileIdentityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityMobileIdentityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityMobileIdentityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksMobilityModifyRequest21 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBroadWorksMobilityModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksMobilityModifyRequest21 $request)
    {
        return $this->call($request);
    }


}

