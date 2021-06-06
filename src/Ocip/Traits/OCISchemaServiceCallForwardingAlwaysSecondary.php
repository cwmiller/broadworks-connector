<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallForwardingAlwaysSecondary
{

    /**
     * @param UserCallForwardingAlwaysSecondaryGetRequest $request
     * @return UserCallForwardingAlwaysSecondaryGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingAlwaysSecondaryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingAlwaysSecondaryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingAlwaysSecondaryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingAlwaysSecondaryModifyRequest $request)
    {
        return $this->call($request);
    }


}

