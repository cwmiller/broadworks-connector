<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceBargeInExempt
{

    /**
     * @param UserBargeInExemptGetRequest $request
     * @return UserBargeInExemptGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBargeInExemptGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBargeInExemptModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBargeInExemptModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptModifyRequest $request)
    {
        return $this->call($request);
    }


}

