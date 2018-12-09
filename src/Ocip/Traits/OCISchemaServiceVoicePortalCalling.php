<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceVoicePortalCalling
{

    /**
     * @param UserVoicePortalCallingGetRequest $request
     * @return UserVoicePortalCallingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoicePortalCallingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserVoicePortalCallingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userVoicePortalCallingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserVoicePortalCallingModifyRequest $request)
    {
        return $this->call($request);
    }


}

