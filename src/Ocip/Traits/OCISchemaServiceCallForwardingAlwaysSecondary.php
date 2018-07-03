<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallForwardingAlwaysSecondary
{

    /**
     * @param UserCallForwardingAlwaysSecondaryGetRequest $request
     * @return UserCallForwardingAlwaysSecondaryGetResponse
     */
    public function userCallForwardingAlwaysSecondaryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingAlwaysSecondaryModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingAlwaysSecondaryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryModifyRequest $request)
    {
        return $this->call($request);
    }


}

