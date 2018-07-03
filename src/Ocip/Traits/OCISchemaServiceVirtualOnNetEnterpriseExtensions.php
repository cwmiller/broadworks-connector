<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsAddUserRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsDeleteUserRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsGetUserRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsModifyUserRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeDeleteRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceVirtualOnNetEnterpriseExtensions
{

    /**
     * @param EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest $request
     * @return EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse
     */
    public function enterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVirtualOnNetEnterpriseExtensionsAddUserRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVirtualOnNetEnterpriseExtensionsAddUserRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsAddUserRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVirtualOnNetEnterpriseExtensionsDeleteUserRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVirtualOnNetEnterpriseExtensionsDeleteUserRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsDeleteUserRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest $request
     * @return
     */
    public function groupVirtualOnNetEnterpriseExtensionsGetUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVirtualOnNetEnterpriseExtensionsGetUserRequest $request
     * @return
     */
    public function groupVirtualOnNetEnterpriseExtensionsGetUserRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsGetUserRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupVirtualOnNetEnterpriseExtensionsModifyUserRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupVirtualOnNetEnterpriseExtensionsModifyUserRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupVirtualOnNetEnterpriseExtensionsModifyUserRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVirtualOnNetCallTypeAddRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemVirtualOnNetCallTypeAddRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVirtualOnNetCallTypeDeleteRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemVirtualOnNetCallTypeDeleteRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeDeleteRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVirtualOnNetCallTypeGetListRequest $request
     * @return SystemVirtualOnNetCallTypeGetListResponse
     */
    public function systemVirtualOnNetCallTypeGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemVirtualOnNetCallTypeModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemVirtualOnNetCallTypeModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemVirtualOnNetCallTypeModifyRequest $request)
    {
        return $this->call($request);
    }


}

