<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetDepartmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetDepartmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponse22;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest22;
use CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequest20;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceMusicOnHold
{

    /**
     * @param GroupMusicOnHoldAddInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupMusicOnHoldAddInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupMusicOnHoldDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetDepartmentListRequest $request
     * @return GroupMusicOnHoldGetDepartmentListResponse
     * @throws ErrorResponseException
     */
    public function groupMusicOnHoldGetDepartmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetDepartmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequest22 $request
     * @return GroupMusicOnHoldGetInstanceResponse22
     * @throws ErrorResponseException
     */
    public function groupMusicOnHoldGetInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldModifyInstanceRequest22 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupMusicOnHoldModifyInstanceRequest22(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequest22 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMusicOnHoldGetRequest $request
     * @return SystemMusicOnHoldGetResponse
     * @throws ErrorResponseException
     */
    public function systemMusicOnHoldGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMusicOnHoldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemMusicOnHoldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldGetRequest $request
     * @return UserMusicOnHoldGetResponse
     * @throws ErrorResponseException
     */
    public function userMusicOnHoldGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userMusicOnHoldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserGetRequest20 $request
     * @return UserMusicOnHoldUserGetResponse20
     * @throws ErrorResponseException
     */
    public function userMusicOnHoldUserGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userMusicOnHoldUserModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequest20 $request)
    {
        return $this->call($request);
    }


}

