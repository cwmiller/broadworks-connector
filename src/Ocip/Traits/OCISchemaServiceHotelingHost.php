<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceHotelingHost
{

    /**
     * @param UserHotelingHostGetRequest17 $request
     * @return UserHotelingHostGetResponse17|ErrorResponse
     */
    public function userHotelingHostGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserHotelingHostModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userHotelingHostModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingHostModifyRequest $request)
    {
        return $this->call($request);
    }


}

