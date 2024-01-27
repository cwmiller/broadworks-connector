<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostAddInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetAvailableHostListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetAvailableHostListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestModifyRequest22;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceFlexibleSeatingGuest
{
    /**
     * @param GroupFlexibleSeatingAccessDeviceGetListRequest $request
     * @return GroupFlexibleSeatingAccessDeviceGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingAccessDeviceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostAddInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostAddInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostAddInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGetInstanceListRequest $request
     * @return GroupFlexibleSeatingHostGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGetInstanceRequest22 $request
     * @return GroupFlexibleSeatingHostGetInstanceResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostGetInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGuestAssociationGetRequest $request
     * @return GroupFlexibleSeatingHostGuestAssociationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostGuestAssociationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGuestAssociationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostGuestAssociationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostModifyInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostModifyInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostRoutingPoliciesGetRequest $request
     * @return GroupFlexibleSeatingHostRoutingPoliciesGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostRoutingPoliciesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostRoutingPoliciesModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFlexibleSeatingHostRoutingPoliciesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFlexibleSeatingGuestGetAvailableHostListRequest $request
     * @return UserFlexibleSeatingGuestGetAvailableHostListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userFlexibleSeatingGuestGetAvailableHostListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetAvailableHostListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFlexibleSeatingGuestGetRequest22 $request
     * @return UserFlexibleSeatingGuestGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userFlexibleSeatingGuestGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFlexibleSeatingGuestModifyRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userFlexibleSeatingGuestModifyRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestModifyRequest22 $request)
    {
        return $this->call($request);
    }
}

