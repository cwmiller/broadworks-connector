<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCommPilotExpress
{
    /**
     * @param UserCommPilotExpressGetRequest $request
     * @return UserCommPilotExpressGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCommPilotExpressGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommPilotExpressModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCommPilotExpressModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressModifyRequest $request)
    {
        return $this->call($request);
    }
}

