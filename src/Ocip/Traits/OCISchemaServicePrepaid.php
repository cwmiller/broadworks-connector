<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserPrepaidGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrepaidGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPrepaidModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServicePrepaid
{

    /**
     * @param UserPrepaidGetRequest $request
     * @return UserPrepaidGetResponse
     * @throws ErrorResponseException
     */
    public function userPrepaidGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrepaidGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrepaidModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPrepaidModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrepaidModifyRequest $request)
    {
        return $this->call($request);
    }


}

