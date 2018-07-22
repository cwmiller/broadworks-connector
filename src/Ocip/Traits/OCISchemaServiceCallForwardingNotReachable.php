<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallForwardingNotReachable
{

    /**
     * @param UserCallForwardingNotReachableGetRequest $request
     * @return UserCallForwardingNotReachableGetResponse
     * @throws ErrorResponseException
     */
    public function userCallForwardingNotReachableGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingNotReachableModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCallForwardingNotReachableModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableModifyRequest $request)
    {
        return $this->call($request);
    }


}

