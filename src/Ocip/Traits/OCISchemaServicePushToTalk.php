<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePushToTalk
{

    /**
     * @param UserPushToTalkGetAvailableUserListRequest $request
     * @return UserPushToTalkGetAvailableUserListResponse|ErrorResponse
     */
    public function userPushToTalkGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPushToTalkGetRequest $request
     * @return UserPushToTalkGetResponse|ErrorResponse
     */
    public function userPushToTalkGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPushToTalkModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPushToTalkModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPushToTalkModifyRequest $request)
    {
        return $this->call($request);
    }


}

