<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeAssignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeUnassignListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixActivateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeactivateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeActivateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeDeactivateListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserRouteListModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceRouteList
{

    /**
     * @param EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest $request
     * @return EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request
     * @return EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest $request
     * @return EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request
     * @return EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberPrefixAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberPrefixAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest $request
     * @return GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request
     * @return GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberPrefixUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberPrefixUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberPrefixUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberRangeAssignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberRangeAssignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeAssignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest $request
     * @return GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request
     * @return GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupRouteListEnterpriseTrunkNumberRangeUnassignListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupRouteListEnterpriseTrunkNumberRangeUnassignListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupRouteListEnterpriseTrunkNumberRangeUnassignListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberPrefixActivateListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberPrefixActivateListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixActivateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberPrefixAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberPrefixAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeactivateListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberPrefixDeactivateListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeactivateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberPrefixDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest $request
     * @return ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request
     * @return ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberRangeActivateListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberRangeActivateListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeActivateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberRangeDeactivateListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberRangeDeactivateListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeDeactivateListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberRangeDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberRangeDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest $request
     * @return ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request
     * @return ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request
     * @return SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request
     * @return SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRouteListGetRequest22 $request
     * @return UserRouteListGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userRouteListGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserRouteListGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRouteListModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userRouteListModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRouteListModifyRequest $request)
    {
        return $this->call($request);
    }


}

