<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallForwardingNotReachable
{

    /**
     * @param UserCallForwardingNotReachableGetRequest $request
     * @return UserCallForwardingNotReachableGetResponse
     */
    public function userCallForwardingNotReachableGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingNotReachableModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingNotReachableModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNotReachableModifyRequest $request)
    {
        return $this->call($request);
    }


}

