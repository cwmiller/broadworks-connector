<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingLineIDDeliveryBlocking
{
    /**
     * @param UserCallingLineIDDeliveryBlockingGetRequest $request
     * @return UserCallingLineIDDeliveryBlockingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingLineIDDeliveryBlockingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingLineIDDeliveryBlockingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingLineIDDeliveryBlockingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingModifyRequest $request)
    {
        return $this->call($request);
    }
}

