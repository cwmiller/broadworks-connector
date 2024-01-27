<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterMonitoringGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterMonitoringGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterMonitoringModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterMonitoringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterMonitoringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterMonitoringModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallCenterMonitoring
{
    /**
     * @param EnterpriseCallCenterMonitoringGetRequest23 $request
     * @return EnterpriseCallCenterMonitoringGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterMonitoringGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterMonitoringGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param EnterpriseCallCenterMonitoringModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function enterpriseCallCenterMonitoringModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseCallCenterMonitoringModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterMonitoringGetRequest $request
     * @return GroupCallCenterMonitoringGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterMonitoringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterMonitoringGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallCenterMonitoringModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCallCenterMonitoringModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallCenterMonitoringModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterMonitoringGetRequest23 $request
     * @return UserCallCenterMonitoringGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterMonitoringGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterMonitoringModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterMonitoringModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringModifyRequest $request)
    {
        return $this->call($request);
    }
}

