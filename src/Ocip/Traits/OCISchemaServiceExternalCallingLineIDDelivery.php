<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceExternalCallingLineIDDelivery
{

    /**
     * @param UserExternalCallingLineIDDeliveryGetRequest $request
     * @return UserExternalCallingLineIDDeliveryGetResponse
     */
    public function userExternalCallingLineIDDeliveryGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExternalCallingLineIDDeliveryModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userExternalCallingLineIDDeliveryModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExternalCallingLineIDDeliveryModifyRequest $request)
    {
        return $this->call($request);
    }


}

