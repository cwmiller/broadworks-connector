<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallForwardingBusy
{

    /**
     * @param UserCallForwardingBusyGetRequest $request
     * @return UserCallForwardingBusyGetResponse
     */
    public function userCallForwardingBusyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingBusyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingBusyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyModifyRequest $request)
    {
        return $this->call($request);
    }


}

