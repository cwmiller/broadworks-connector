<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallPickup
{

    /**
     * @param GroupCallPickupAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallPickupAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupDeleteInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallPickupDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetAvailableUserListRequest $request
     * @return GroupCallPickupGetAvailableUserListResponse|ErrorResponse
     */
    public function groupCallPickupGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstanceListRequest $request
     * @return GroupCallPickupGetInstanceListResponse|ErrorResponse
     */
    public function groupCallPickupGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstanceRequest $request
     * @return GroupCallPickupGetInstanceResponse|ErrorResponse
     */
    public function groupCallPickupGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallPickupModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPickupGetRequest $request
     * @return UserCallPickupGetResponse|ErrorResponse
     */
    public function userCallPickupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetRequest $request)
    {
        return $this->call($request);
    }


}

