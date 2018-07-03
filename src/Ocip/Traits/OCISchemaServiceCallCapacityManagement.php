<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementAddUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementDeleteInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementDeleteUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetInstanceResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallCapacityManagement
{

    /**
     * @param GroupCallCapacityManagementAddInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCapacityManagementAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementAddUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCapacityManagementAddUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementAddUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementDeleteInstanceListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCapacityManagementDeleteInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementDeleteInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementDeleteUserListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCapacityManagementDeleteUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementDeleteUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementGetAvailableUserListRequest $request
     * @return GroupCallCapacityManagementGetAvailableUserListResponse|ErrorResponse
     */
    public function groupCallCapacityManagementGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementGetInstanceListRequest $request
     * @return GroupCallCapacityManagementGetInstanceListResponse|ErrorResponse
     */
    public function groupCallCapacityManagementGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementGetInstanceRequest $request
     * @return GroupCallCapacityManagementGetInstanceResponse|ErrorResponse
     */
    public function groupCallCapacityManagementGetInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementGetInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCapacityManagementModifyInstanceRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCallCapacityManagementModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCapacityManagementModifyInstanceRequest $request)
    {
        return $this->call($request);
    }


}

