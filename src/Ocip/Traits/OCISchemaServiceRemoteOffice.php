<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceRemoteOffice
{

    /**
     * @param UserRemoteOfficeGetRequest $request
     * @return UserRemoteOfficeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userRemoteOfficeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRemoteOfficeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userRemoteOfficeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeModifyRequest $request)
    {
        return $this->call($request);
    }


}

