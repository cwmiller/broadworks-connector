<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallCenterMonitoring
{

    /**
     * @param UserCallCenterMonitoringGetRequest $request
     * @return UserCallCenterMonitoringGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallCenterMonitoringGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallCenterMonitoringGetRequest $request)
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

