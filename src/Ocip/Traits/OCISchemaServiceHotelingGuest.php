<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestModifyRequest21;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceHotelingGuest
{

    /**
     * @param UserHotelingGuestGetAvailableUserListRequest $request
     * @return UserHotelingGuestGetAvailableUserListResponse|ErrorResponse
     */
    public function userHotelingGuestGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserHotelingGuestGetRequest14sp4 $request
     * @return UserHotelingGuestGetResponse14sp4|ErrorResponse
     */
    public function userHotelingGuestGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserHotelingGuestModifyRequest21 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userHotelingGuestModifyRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserHotelingGuestModifyRequest21 $request)
    {
        return $this->call($request);
    }


}

