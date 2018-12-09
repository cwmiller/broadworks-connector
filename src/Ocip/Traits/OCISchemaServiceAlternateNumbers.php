<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceAlternateNumbers
{

    /**
     * @param UserAlternateNumbersGetRequest21 $request
     * @return UserAlternateNumbersGetResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAlternateNumbersGetRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersGetRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserAlternateNumbersModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAlternateNumbersModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAlternateNumbersModifyRequest $request)
    {
        return $this->call($request);
    }


}

