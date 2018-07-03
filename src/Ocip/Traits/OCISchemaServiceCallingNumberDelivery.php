<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallingNumberDelivery
{

    /**
     * @param UserCallingNumberDeliveryGetRequest $request
     * @return
     */
    public function userCallingNumberDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNumberDeliveryModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallingNumberDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

