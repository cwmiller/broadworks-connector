<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetDepartmentListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetDepartmentListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequestRIV2;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceResponseRIV2;
use CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequestRIV2;
use CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequestRI;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceMusicOnHold
{
    /**
     * @param GroupMusicOnHoldAddInstanceRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldAddInstanceRequestRI(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldAddInstanceRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetDepartmentListRequest $request
     * @return GroupMusicOnHoldGetDepartmentListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldGetDepartmentListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetDepartmentListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldGetInstanceRequestRIV2 $request
     * @return GroupMusicOnHoldGetInstanceResponseRIV2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldGetInstanceRequestRIV2(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldGetInstanceRequestRIV2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupMusicOnHoldModifyInstanceRequestRIV2 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupMusicOnHoldModifyInstanceRequestRIV2(\CWM\BroadWorksConnector\Ocip\Models\GroupMusicOnHoldModifyInstanceRequestRIV2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMusicOnHoldGetRequest $request
     * @return SystemMusicOnHoldGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMusicOnHoldGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemMusicOnHoldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemMusicOnHoldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemMusicOnHoldModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldGetRequest $request
     * @return UserMusicOnHoldGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMusicOnHoldGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMusicOnHoldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserGetRequestRI $request
     * @return UserMusicOnHoldUserGetResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMusicOnHoldUserGetRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserGetRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserMusicOnHoldUserModifyRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userMusicOnHoldUserModifyRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserMusicOnHoldUserModifyRequestRI $request)
    {
        return $this->call($request);
    }
}

