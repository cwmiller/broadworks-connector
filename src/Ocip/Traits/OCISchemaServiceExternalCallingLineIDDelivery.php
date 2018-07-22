<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceExternalCallingLineIDDelivery
{

    /**
     * @param UserExternalCallingLineIDDeliveryGetRequest $request
     * @return UserExternalCallingLineIDDeliveryGetResponse
     * @throws ErrorResponseException
     */
    public function userExternalCallingLineIDDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExternalCallingLineIDDeliveryModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userExternalCallingLineIDDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

