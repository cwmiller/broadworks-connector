<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceAuthentication
{

    /**
     * @param UserAuthenticationGetRequest $request
     * @return UserAuthenticationGetResponse|ErrorResponse
     */
    public function userAuthenticationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAuthenticationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userAuthenticationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequest $request)
    {
        return $this->call($request);
    }


}

