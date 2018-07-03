<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallingLineIDBlockingOverride
{

    /**
     * @param UserCallingLineIDBlockingOverrideGetRequest $request
     * @return UserCallingLineIDBlockingOverrideGetResponse
     */
    public function userCallingLineIDBlockingOverrideGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingLineIDBlockingOverrideModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallingLineIDBlockingOverrideModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideModifyRequest $request)
    {
        return $this->call($request);
    }


}

