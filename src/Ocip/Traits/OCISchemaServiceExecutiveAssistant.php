<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceExecutiveAssistant
{
    /**
     * @param UserExecutiveAssistantGetRequest $request
     * @return UserExecutiveAssistantGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveAssistantGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveAssistantModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveAssistantModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantModifyRequest $request)
    {
        return $this->call($request);
    }
}

