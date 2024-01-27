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
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetOriginatorListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetTargetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyOriginatorListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyTargetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityModifyRequest22;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupPagingGetListRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupPagingGetListResponse;

trait OCISchemaServiceGroupPaging
{
    /**
     * @param GroupGroupPagingAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingAddOriginatorListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingAddOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingAddTargetListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingAddTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingAddTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingDeleteOriginatorListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingDeleteOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingDeleteTargetListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingDeleteTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingDeleteTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetAvailableOriginatorListRequest $request
     * @return GroupGroupPagingGetAvailableOriginatorListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingGetAvailableOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetAvailableTargetListRequest $request
     * @return GroupGroupPagingGetAvailableTargetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingGetAvailableTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetAvailableTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetInstanceListRequest $request
     * @return GroupGroupPagingGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetInstanceRequest19sp1 $request
     * @return GroupGroupPagingGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetOriginatorListRequest $request
     * @return GroupGroupPagingGetOriginatorListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingGetOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingGetTargetListRequest $request
     * @return GroupGroupPagingGetTargetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingGetTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingGetTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyOriginatorListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingModifyOriginatorListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyOriginatorListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingModifyTargetListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingModifyTargetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingModifyTargetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingTargetsCapacityGetRequest22 $request
     * @return GroupGroupPagingTargetsCapacityGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingTargetsCapacityGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupPagingTargetsCapacityModifyRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupPagingTargetsCapacityModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupPagingTargetsCapacityModifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGroupPagingTargetsCapacityGetRequest22 $request
     * @return ServiceProviderGroupPagingTargetsCapacityGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderGroupPagingTargetsCapacityGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderGroupPagingTargetsCapacityModifyRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderGroupPagingTargetsCapacityModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderGroupPagingTargetsCapacityModifyRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGroupPagingGetListRequest $request
     * @return UserGroupPagingGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userGroupPagingGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGroupPagingGetListRequest $request)
    {
        return $this->call($request);
    }
}

