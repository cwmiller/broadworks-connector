<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetRequest18;
use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetResponse18;
use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetRequest23;
use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetResponse23;
use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceBusyLampField
{

    /**
     * @param SystemBusyLampFieldGetRequest18 $request
     * @return SystemBusyLampFieldGetResponse18
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBusyLampFieldGetRequest18(\CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBusyLampFieldGetRequest23 $request
     * @return SystemBusyLampFieldGetResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBusyLampFieldGetRequest23(\CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBusyLampFieldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemBusyLampFieldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBusyLampFieldGetAvailableUserListRequest $request
     * @return UserBusyLampFieldGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBusyLampFieldGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBusyLampFieldGetRequest16sp2 $request
     * @return UserBusyLampFieldGetResponse16sp2
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBusyLampFieldGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBusyLampFieldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBusyLampFieldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldModifyRequest $request)
    {
        return $this->call($request);
    }


}

