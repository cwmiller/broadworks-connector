<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserDoNotDisturbGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDoNotDisturbGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserDoNotDisturbModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceDoNotDisturb
{
    /**
     * @param UserDoNotDisturbGetRequest $request
     * @return UserDoNotDisturbGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userDoNotDisturbGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDoNotDisturbGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDoNotDisturbModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userDoNotDisturbModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDoNotDisturbModifyRequest $request)
    {
        return $this->call($request);
    }
}

