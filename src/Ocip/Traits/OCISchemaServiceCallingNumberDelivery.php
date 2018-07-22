<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingNumberDelivery
{

    /**
     * @param UserCallingNumberDeliveryGetRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userCallingNumberDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNumberDeliveryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userCallingNumberDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

