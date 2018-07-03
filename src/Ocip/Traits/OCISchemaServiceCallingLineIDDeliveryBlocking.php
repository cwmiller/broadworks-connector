<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallingLineIDDeliveryBlocking
{

    /**
     * @param UserCallingLineIDDeliveryBlockingGetRequest $request
     * @return UserCallingLineIDDeliveryBlockingGetResponse
     */
    public function userCallingLineIDDeliveryBlockingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingLineIDDeliveryBlockingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallingLineIDDeliveryBlockingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDDeliveryBlockingModifyRequest $request)
    {
        return $this->call($request);
    }


}

