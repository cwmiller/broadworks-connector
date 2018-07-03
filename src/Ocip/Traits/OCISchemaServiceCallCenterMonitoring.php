<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallCenterMonitoring
{

    /**
     * @param UserCallCenterMonitoringGetRequest $request
     * @return UserCallCenterMonitoringGetResponse|ErrorResponse
     */
    public function userCallCenterMonitoringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallCenterMonitoringModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallCenterMonitoringModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringModifyRequest $request)
    {
        return $this->call($request);
    }


}

