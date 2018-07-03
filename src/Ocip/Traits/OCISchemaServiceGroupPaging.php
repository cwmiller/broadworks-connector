<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddOriginatorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteOriginatorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableOriginatorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableOriginatorListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableTargetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetOriginatorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyOriginatorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupPagingGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupPagingGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceGroupPaging
{

    /**
     * @param GroupGroupPagingAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingAddOriginatorListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingAddOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingAddTargetListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingAddTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingDeleteOriginatorListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingDeleteOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingDeleteTargetListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingDeleteTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetAvailableOriginatorListRequest $request
     * @return GroupGroupPagingGetAvailableOriginatorListResponse|ErrorResponse
     */
    public function groupGroupPagingGetAvailableOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetAvailableTargetListRequest $request
     * @return GroupGroupPagingGetAvailableTargetListResponse|ErrorResponse
     */
    public function groupGroupPagingGetAvailableTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetInstanceListRequest $request
     * @return GroupGroupPagingGetInstanceListResponse|ErrorResponse
     */
    public function groupGroupPagingGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetInstanceRequest19sp1 $request
     * @return GroupGroupPagingGetInstanceResponse19sp1|ErrorResponse
     */
    public function groupGroupPagingGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetOriginatorListRequest $request
     * @return
     */
    public function groupGroupPagingGetOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetTargetListRequest $request
     * @return
     */
    public function groupGroupPagingGetTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyOriginatorListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingModifyOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyTargetListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingModifyTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingTargetsCapacityGetRequest $request
     * @return GroupGroupPagingTargetsCapacityGetResponse
     */
    public function groupGroupPagingTargetsCapacityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingTargetsCapacityModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupGroupPagingTargetsCapacityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGroupPagingTargetsCapacityGetRequest $request
     * @return ServiceProviderGroupPagingTargetsCapacityGetResponse
     */
    public function serviceProviderGroupPagingTargetsCapacityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGroupPagingTargetsCapacityModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function serviceProviderGroupPagingTargetsCapacityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGroupPagingGetListRequest $request
     * @return UserGroupPagingGetListResponse|ErrorResponse
     */
    public function userGroupPagingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGroupPagingGetListRequest $request)
    {
        return $this->call($request);
    }


}

