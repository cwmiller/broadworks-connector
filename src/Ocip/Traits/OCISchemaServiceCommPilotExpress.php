<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCommPilotExpress
{

    /**
     * @param UserCommPilotExpressGetRequest $request
     * @return UserCommPilotExpressGetResponse|ErrorResponse
     */
    public function userCommPilotExpressGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCommPilotExpressModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCommPilotExpressModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCommPilotExpressModifyRequest $request)
    {
        return $this->call($request);
    }


}

