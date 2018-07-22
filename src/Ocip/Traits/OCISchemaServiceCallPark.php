<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkAddInstanceRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetAvailableAlternateRecallUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetAvailableAlternateRecallUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetInstanceRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetInstanceResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallParkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallParkGetRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\UserCallParkGetResponse;

trait OCISchemaServiceCallPark
{

    /**
     * @param GroupCallParkAddInstanceRequest16sp2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkAddInstanceRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkAddInstanceRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkGetAvailableAlternateRecallUserListRequest $request
     * @return GroupCallParkGetAvailableAlternateRecallUserListResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkGetAvailableAlternateRecallUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetAvailableAlternateRecallUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkGetAvailableUserListRequest $request
     * @return GroupCallParkGetAvailableUserListResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkGetInstanceListRequest $request
     * @return GroupCallParkGetInstanceListResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkGetInstanceRequest16sp2 $request
     * @return GroupCallParkGetInstanceResponse16sp2
     * @throws ErrorResponseException
     */
    public function groupCallParkGetInstanceRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetInstanceRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkGetRequest16sp2 $request
     * @return GroupCallParkGetResponse16sp2
     * @throws ErrorResponseException
     */
    public function groupCallParkGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkModifyInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallParkModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallParkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallParkModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallParkGetRequest $request
     * @return UserCallParkGetResponse
     * @throws ErrorResponseException
     */
    public function userCallParkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallParkGetRequest $request)
    {
        return $this->call($request);
    }


}

