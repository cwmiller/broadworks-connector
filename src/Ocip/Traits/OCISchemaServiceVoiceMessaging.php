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
use CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetResponse22V2;
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
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceVoiceMessaging
{

    /**
     * @param GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetRequest $request
     * @return GroupVoiceMessagingGroupGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalBrandingRequest20 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupGetVoicePortalBrandingRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalBrandingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupGetVoicePortalRequest21sp1 $request
     * @return GroupVoiceMessagingGroupGetVoicePortalResponse21sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupGetVoicePortalRequest21sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupGetVoicePortalRequest21sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupModifyVoicePortalBrandingRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVoiceMessagingGroupModifyVoicePortalRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupVoiceMessagingGroupModifyVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingGroupModifyVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupGetRequest $request
     * @return ServiceProviderVoiceMessagingGroupGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderVoiceMessagingGroupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request
     * @return ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupGetVoicePortalRequest $request
     * @return ServiceProviderVoiceMessagingGroupGetVoicePortalResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderVoiceMessagingGroupGetVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupGetVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderVoiceMessagingGroupModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderVoiceMessagingGroupModifyVoicePortalRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessageSummaryUpdateGetRequest $request
     * @return SystemVoiceMessageSummaryUpdateGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessageSummaryUpdateGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessageSummaryUpdateModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessageSummaryUpdateModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessageSummaryUpdateModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetRequest22V2 $request
     * @return SystemVoiceMessagingGroupGetResponse22V2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupGetRequest22V2(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetRequest22V2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupGetVoicePortalMenusRequest21 $request
     * @return SystemVoiceMessagingGroupGetVoicePortalMenusResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupGetVoicePortalMenusRequest21(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupModifyRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupModifyRequest16(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemVoiceMessagingGroupModifyVoicePortalMenusRequest19(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserAddAliasListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserAddAliasListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserAddAliasListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserDeleteAliasListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserDeleteAliasListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserDeleteAliasListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 $request
     * @return UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetAliasListRequest $request
     * @return UserVoiceMessagingUserGetAliasListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetAliasListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetAliasListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetDistributionListRequest $request
     * @return UserVoiceMessagingUserGetDistributionListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetDistributionListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetDistributionListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetGreetingRequest20 $request
     * @return UserVoiceMessagingUserGetGreetingResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetOutgoingSMDIMWIRequest $request
     * @return UserVoiceMessagingUserGetOutgoingSMDIMWIResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetOutgoingSMDIMWIRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetOutgoingSMDIMWIRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetVoiceManagementRequest17 $request
     * @return UserVoiceMessagingUserGetVoiceManagementResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetVoiceManagementRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoiceManagementRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserGetVoicePortalRequest20 $request
     * @return UserVoiceMessagingUserGetVoicePortalResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserGetVoicePortalRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserGetVoicePortalRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyAdvancedVoiceManagementRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyDistributionListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyDistributionListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyDistributionListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyGreetingRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyGreetingRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyGreetingRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyOutgoingSMDIMWIRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyVoiceManagementRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyVoiceManagementRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoiceManagementRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoiceMessagingUserModifyVoicePortalRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoiceMessagingUserModifyVoicePortalRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserVoiceMessagingUserModifyVoicePortalRequest20 $request)
    {
        return $this->call($request);
    }


}

