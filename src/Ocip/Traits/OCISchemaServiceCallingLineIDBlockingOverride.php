<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingLineIDBlockingOverride
{

    /**
     * @param UserCallingLineIDBlockingOverrideGetRequest $request
     * @return UserCallingLineIDBlockingOverrideGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingLineIDBlockingOverrideGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallingLineIDBlockingOverrideModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallingLineIDBlockingOverrideModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallingLineIDBlockingOverrideModifyRequest $request)
    {
        return $this->call($request);
    }


}

