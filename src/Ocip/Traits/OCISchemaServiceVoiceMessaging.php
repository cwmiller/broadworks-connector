<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalResponse21sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22V2;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusRequest21;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyRequest16;
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserAddAliasListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserDeleteAliasListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAliasListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAliasListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetDistributionListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetDistributionListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetOutgoingSMDIMWIRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetOutgoingSMDIMWIResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoiceManagementRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoiceManagementResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyDistributionListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoiceManagementRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalRequest20;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceVoiceMessaging
{

    /**
     * @param GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetRequest $request
     * @return GroupVoiceMessagingGroupGetResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalBrandingRequest20 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20|ErrorResponse
     */
    public function groupVoiceMessagingGroupGetVoicePortalBrandingRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalRequest21sp1 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalResponse21sp1|ErrorResponse
     */
    public function groupVoiceMessagingGroupGetVoicePortalRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupModifyVoicePortalBrandingRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVoiceMessagingGroupModifyVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupGetRequest $request
     * @return ServiceProviderVoiceMessagingGroupGetResponse|ErrorResponse
     */
    public function serviceProviderVoiceMessagingGroupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request
     * @return ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16|ErrorResponse
     */
    public function serviceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupGetVoicePortalRequest $request
     * @return ServiceProviderVoiceMessagingGroupGetVoicePortalResponse|ErrorResponse
     */
    public function serviceProviderVoiceMessagingGroupGetVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderVoiceMessagingGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderVoiceMessagingGroupModifyVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessageSummaryUpdateGetRequest $request
     * @return SystemVoiceMessageSummaryUpdateGetResponse|ErrorResponse
     */
    public function systemVoiceMessageSummaryUpdateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessageSummaryUpdateModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemVoiceMessageSummaryUpdateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest22V2 $request
     * @return SystemVoiceMessagingGroupGetResponse22|ErrorResponse
     */
    public function systemVoiceMessagingGroupGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetVoicePortalMenusRequest21 $request
     * @return SystemVoiceMessagingGroupGetVoicePortalMenusResponse21|ErrorResponse
     */
    public function systemVoiceMessagingGroupGetVoicePortalMenusRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupModifyRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemVoiceMessagingGroupModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemVoiceMessagingGroupModifyVoicePortalMenusRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserAddAliasListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserAddAliasListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserAddAliasListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserDeleteAliasListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserDeleteAliasListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserDeleteAliasListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 $request
     * @return UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3|ErrorResponse
     */
    public function userVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetAliasListRequest $request
     * @return UserVoiceMessagingUserGetAliasListResponse|ErrorResponse
     */
    public function userVoiceMessagingUserGetAliasListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAliasListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetDistributionListRequest $request
     * @return UserVoiceMessagingUserGetDistributionListResponse|ErrorResponse
     */
    public function userVoiceMessagingUserGetDistributionListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetDistributionListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetGreetingRequest20 $request
     * @return UserVoiceMessagingUserGetGreetingResponse20|ErrorResponse
     */
    public function userVoiceMessagingUserGetGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetOutgoingSMDIMWIRequest $request
     * @return UserVoiceMessagingUserGetOutgoingSMDIMWIResponse|ErrorResponse
     */
    public function userVoiceMessagingUserGetOutgoingSMDIMWIRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetOutgoingSMDIMWIRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetVoiceManagementRequest17 $request
     * @return UserVoiceMessagingUserGetVoiceManagementResponse17|ErrorResponse
     */
    public function userVoiceMessagingUserGetVoiceManagementRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoiceManagementRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetVoicePortalRequest20 $request
     * @return UserVoiceMessagingUserGetVoicePortalResponse20|ErrorResponse
     */
    public function userVoiceMessagingUserGetVoicePortalRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyAdvancedVoiceManagementRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyDistributionListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyDistributionListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyDistributionListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyGreetingRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyOutgoingSMDIMWIRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyVoiceManagementRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyVoiceManagementRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoiceManagementRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyVoicePortalRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoiceMessagingUserModifyVoicePortalRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalRequest20 $request)
    {
        return $this->call($request);
    }


}

