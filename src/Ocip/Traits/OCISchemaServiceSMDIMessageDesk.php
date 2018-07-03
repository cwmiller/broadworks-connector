<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskAddServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskAddServerRouteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskDeleteServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskDeleteServerRouteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskGetServerListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskGetServerListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskGetServerRouteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskGetServerRouteListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskAddServerRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskDeleteServerListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskGetServerListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskGetServerListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSMDIMessageDesk
{

    /**
     * @param SystemSMDIMessageDeskAddServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskAddServerRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskAddServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskAddServerRouteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskAddServerRouteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskAddServerRouteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskDeleteServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskDeleteServerRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskDeleteServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskDeleteServerRouteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskDeleteServerRouteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskDeleteServerRouteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskGetServerListRequest $request
     * @return SystemSMDIMessageDeskGetServerListResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskGetServerListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskGetServerListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskGetServerRouteListRequest $request
     * @return SystemSMDIMessageDeskGetServerRouteListResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskGetServerRouteListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskGetServerRouteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskModifyServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskModifyServerRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemSMDIMessageDeskModifyServerRouteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemSMDIMessageDeskModifyServerRouteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSMDIMessageDeskAddServerRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSMDIMessageDeskAddServerRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskAddServerRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSMDIMessageDeskDeleteServerListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSMDIMessageDeskDeleteServerListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskDeleteServerListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSMDIMessageDeskGetRequest $request
     * @return UserSMDIMessageDeskGetResponse|ErrorResponse
     */
    public function userSMDIMessageDeskGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSMDIMessageDeskGetServerListRequest $request
     * @return UserSMDIMessageDeskGetServerListResponse|ErrorResponse
     */
    public function userSMDIMessageDeskGetServerListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskGetServerListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSMDIMessageDeskModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSMDIMessageDeskModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSMDIMessageDeskModifyRequest $request)
    {
        return $this->call($request);
    }


}

