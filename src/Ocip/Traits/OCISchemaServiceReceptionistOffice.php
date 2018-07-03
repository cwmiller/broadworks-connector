<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceReceptionistOffice
{

    /**
     * @param UserBroadWorksReceptionistOfficeGetAvailableUserListRequest $request
     * @return UserBroadWorksReceptionistOfficeGetAvailableUserListResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistOfficeGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistOfficeGetRequest $request
     * @return UserBroadWorksReceptionistOfficeGetResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistOfficeGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistOfficeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistOfficeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistOfficeModifyRequest $request)
    {
        return $this->call($request);
    }


}

