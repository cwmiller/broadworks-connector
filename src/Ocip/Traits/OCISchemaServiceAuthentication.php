<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceAuthentication
{

    /**
     * @param UserAuthenticationGetRequest $request
     * @return UserAuthenticationGetResponse
     * @throws ErrorResponseException
     */
    public function userAuthenticationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAuthenticationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userAuthenticationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAuthenticationModifyRequest $request)
    {
        return $this->call($request);
    }


}

