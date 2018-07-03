<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceRemoteOffice
{

    /**
     * @param UserRemoteOfficeGetRequest $request
     * @return UserRemoteOfficeGetResponse|ErrorResponse
     */
    public function userRemoteOfficeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserRemoteOfficeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userRemoteOfficeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserRemoteOfficeModifyRequest $request)
    {
        return $this->call($request);
    }


}

