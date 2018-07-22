<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMaliciousCallTraceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMaliciousCallTraceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMaliciousCallTraceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMaliciousCallTraceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMaliciousCallTraceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemMaliciousCallTraceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMaliciousCallTraceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMaliciousCallTraceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMaliciousCallTraceModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceMaliciousCallTrace
{

    /**
     * @param ServiceProviderMaliciousCallTraceGetRequest $request
     * @return ServiceProviderMaliciousCallTraceGetResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderMaliciousCallTraceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMaliciousCallTraceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderMaliciousCallTraceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function serviceProviderMaliciousCallTraceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderMaliciousCallTraceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMaliciousCallTraceGetRequest $request
     * @return SystemMaliciousCallTraceGetResponse
     * @throws ErrorResponseException
     */
    public function systemMaliciousCallTraceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMaliciousCallTraceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMaliciousCallTraceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemMaliciousCallTraceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMaliciousCallTraceModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMaliciousCallTraceGetRequest $request
     * @return UserMaliciousCallTraceGetResponse
     * @throws ErrorResponseException
     */
    public function userMaliciousCallTraceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMaliciousCallTraceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMaliciousCallTraceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userMaliciousCallTraceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMaliciousCallTraceModifyRequest $request)
    {
        return $this->call($request);
    }


}

