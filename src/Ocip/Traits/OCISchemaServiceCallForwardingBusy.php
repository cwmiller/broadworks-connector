<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallForwardingBusy
{

    /**
     * @param UserCallForwardingBusyGetRequest $request
     * @return UserCallForwardingBusyGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingBusyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingBusyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingBusyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingBusyModifyRequest $request)
    {
        return $this->call($request);
    }


}

