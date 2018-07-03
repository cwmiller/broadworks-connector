<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserPrepaidGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrepaidGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPrepaidModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePrepaid
{

    /**
     * @param UserPrepaidGetRequest $request
     * @return UserPrepaidGetResponse
     */
    public function userPrepaidGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrepaidGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrepaidModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPrepaidModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrepaidModifyRequest $request)
    {
        return $this->call($request);
    }


}

