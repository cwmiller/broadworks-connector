<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceReceptionistSmallBusiness
{

    /**
     * @param UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest $request
     * @return UserBroadWorksReceptionistSmallBusinessGetAvailableUserListResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistSmallBusinessGetRequest $request
     * @return UserBroadWorksReceptionistSmallBusinessGetResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistSmallBusinessGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksReceptionistSmallBusinessModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBroadWorksReceptionistSmallBusinessModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksReceptionistSmallBusinessModifyRequest $request)
    {
        return $this->call($request);
    }


}

