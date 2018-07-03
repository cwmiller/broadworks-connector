<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSilentAlertingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSilentAlertingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSilentAlertingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSilentAlerting
{

    /**
     * @param UserSilentAlertingGetRequest $request
     * @return UserSilentAlertingGetResponse
     */
    public function userSilentAlertingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSilentAlertingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSilentAlertingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSilentAlertingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSilentAlertingModifyRequest $request)
    {
        return $this->call($request);
    }


}

