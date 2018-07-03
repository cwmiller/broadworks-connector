<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesAddListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceAccountAuthorizationCodes
{

    /**
     * @param GroupAccountAuthorizationCodesAddListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccountAuthorizationCodesAddListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesAddListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccountAuthorizationCodesDeleteListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccountAuthorizationCodesDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccountAuthorizationCodesGetAvailableUserListRequest $request
     * @return GroupAccountAuthorizationCodesGetAvailableUserListResponse|ErrorResponse
     */
    public function groupAccountAuthorizationCodesGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccountAuthorizationCodesGetListRequest $request
     * @return GroupAccountAuthorizationCodesGetListResponse|ErrorResponse
     */
    public function groupAccountAuthorizationCodesGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccountAuthorizationCodesGetRequest $request
     * @return GroupAccountAuthorizationCodesGetResponse|ErrorResponse
     */
    public function groupAccountAuthorizationCodesGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAccountAuthorizationCodesModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupAccountAuthorizationCodesModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAccountAuthorizationCodesModifyRequest $request)
    {
        return $this->call($request);
    }


}

