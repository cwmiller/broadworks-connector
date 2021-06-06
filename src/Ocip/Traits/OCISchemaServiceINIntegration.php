<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceINIntegration
{

    /**
     * @param UserINIntegrationGetRequest $request
     * @return UserINIntegrationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userINIntegrationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserINIntegrationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userINIntegrationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserINIntegrationModifyRequest $request)
    {
        return $this->call($request);
    }


}

