<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationModifyRequest;

trait OCISchemaServiceINIntegration
{

    /**
     * @param UserINIntegrationGetRequest $request
     * @return
     */
    public function userINIntegrationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserINIntegrationModifyRequest $request
     * @return
     */
    public function userINIntegrationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationModifyRequest $request)
    {
        return $this->call($request);
    }


}

