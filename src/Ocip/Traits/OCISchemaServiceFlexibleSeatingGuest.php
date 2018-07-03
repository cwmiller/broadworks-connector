<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetAvailableHostListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceFlexibleSeatingGuest
{

    /**
     * @param GroupFlexibleSeatingAccessDeviceGetListRequest $request
     * @return GroupFlexibleSeatingAccessDeviceGetListResponse
     */
    public function groupFlexibleSeatingAccessDeviceGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGetInstanceListRequest $request
     * @return GroupFlexibleSeatingHostGetInstanceListResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGetInstanceRequest $request
     * @return GroupFlexibleSeatingHostGetInstanceResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGuestAssociationGetRequest $request
     * @return GroupFlexibleSeatingHostGuestAssociationGetResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostGuestAssociationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostGuestAssociationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostGuestAssociationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostGuestAssociationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostModifyActiveInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostRoutingPoliciesGetRequest $request
     * @return GroupFlexibleSeatingHostRoutingPoliciesGetResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostRoutingPoliciesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFlexibleSeatingHostRoutingPoliciesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupFlexibleSeatingHostRoutingPoliciesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingHostRoutingPoliciesModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFlexibleSeatingGuestGetAvailableHostListRequest $request
     * @return UserFlexibleSeatingGuestGetAvailableUserListResponse|ErrorResponse
     */
    public function userFlexibleSeatingGuestGetAvailableHostListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetAvailableHostListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFlexibleSeatingGuestGetRequest $request
     * @return UserFlexibleSeatingGuestGetResponse|ErrorResponse
     */
    public function userFlexibleSeatingGuestGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFlexibleSeatingGuestModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userFlexibleSeatingGuestModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFlexibleSeatingGuestModifyRequest $request)
    {
        return $this->call($request);
    }


}

