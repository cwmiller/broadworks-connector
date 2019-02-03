<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameDeliveryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingNameDeliveryModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingNameDelivery
{

    /**
     * @param UserCallingNameDeliveryGetRequest $request
     * @return UserCallingNameDeliveryGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingNameDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNameDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingNameDeliveryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingNameDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingNameDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

