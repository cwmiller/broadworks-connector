<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceReceptionistOffice
{
    /**
     * @param UserBroadWorksReceptionistOfficeGetAvailableUserListRequest $request
     * @return UserBroadWorksReceptionistOfficeGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistOfficeGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistOfficeGetRequest $request
     * @return UserBroadWorksReceptionistOfficeGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistOfficeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistOfficeModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksReceptionistOfficeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeModifyRequest $request)
    {
        return $this->call($request);
    }
}

