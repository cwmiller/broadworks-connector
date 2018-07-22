<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;

trait OCISchemaServiceINIntegration
{

    /**
     * @param UserINIntegrationGetRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userINIntegrationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserINIntegrationModifyRequest $request
     * @return 
     * @throws ErrorResponseException
     */
    public function userINIntegrationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationModifyRequest $request)
    {
        return $this->call($request);
    }


}

