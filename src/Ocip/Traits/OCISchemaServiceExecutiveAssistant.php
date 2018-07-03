<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceExecutiveAssistant
{

    /**
     * @param UserExecutiveAssistantGetRequest $request
     * @return UserExecutiveAssistantGetResponse|ErrorResponse
     */
    public function userExecutiveAssistantGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveAssistantModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userExecutiveAssistantModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAssistantModifyRequest $request)
    {
        return $this->call($request);
    }


}

