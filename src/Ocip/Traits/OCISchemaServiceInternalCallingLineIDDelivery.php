<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserInternalCallingLineIDDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserInternalCallingLineIDDeliveryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserInternalCallingLineIDDeliveryModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceInternalCallingLineIDDelivery
{

    /**
     * @param UserInternalCallingLineIDDeliveryGetRequest $request
     * @return UserInternalCallingLineIDDeliveryGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userInternalCallingLineIDDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserInternalCallingLineIDDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserInternalCallingLineIDDeliveryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userInternalCallingLineIDDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserInternalCallingLineIDDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

