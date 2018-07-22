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
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetResponse;

trait OCISchemaServiceCallPickup
{

    /**
     * @param GroupCallPickupAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallPickupAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallPickupDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetAvailableUserListRequest $request
     * @return GroupCallPickupGetAvailableUserListResponse
     * @throws ErrorResponseException
     */
    public function groupCallPickupGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstanceListRequest $request
     * @return GroupCallPickupGetInstanceListResponse
     * @throws ErrorResponseException
     */
    public function groupCallPickupGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupGetInstanceRequest $request
     * @return GroupCallPickupGetInstanceResponse
     * @throws ErrorResponseException
     */
    public function groupCallPickupGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallPickupModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallPickupModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallPickupModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallPickupGetRequest $request
     * @return UserCallPickupGetResponse
     * @throws ErrorResponseException
     */
    public function userCallPickupGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallPickupGetRequest $request)
    {
        return $this->call($request);
    }


}

