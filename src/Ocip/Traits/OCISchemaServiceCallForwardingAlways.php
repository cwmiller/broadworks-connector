<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallForwardingAlways
{

    /**
     * @param UserCallForwardingAlwaysGetRequest $request
     * @return UserCallForwardingAlwaysGetResponse
     * @throws ErrorResponseException
     */
    public function userCallForwardingAlwaysGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingAlwaysModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCallForwardingAlwaysModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysModifyRequest $request)
    {
        return $this->call($request);
    }


}

