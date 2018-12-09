<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceHotelingHost
{

    /**
     * @param UserHotelingHostGetRequest17 $request
     * @return UserHotelingHostGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userHotelingHostGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserHotelingHostModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userHotelingHostModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostModifyRequest $request)
    {
        return $this->call($request);
    }


}

