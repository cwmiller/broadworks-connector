<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingNumberDelivery
{

    /**
     * @param UserCallingNumberDeliveryGetRequest $request
     * @return UserCallingNumberDeliveryGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingNumberDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNumberDeliveryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingNumberDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNumberDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

