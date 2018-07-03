<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceVoicePortalCalling
{

    /**
     * @param UserVoicePortalCallingGetRequest $request
     * @return UserVoicePortalCallingGetResponse
     */
    public function userVoicePortalCallingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoicePortalCallingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userVoicePortalCallingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingModifyRequest $request)
    {
        return $this->call($request);
    }


}

