<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetRequest18;
use CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetRequest16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetResponse16sp2;
use CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceBusyLampField
{

    /**
     * @param SystemBusyLampFieldGetRequest18 $request
     * @return 
     * @throws ErrorResponseException
     */
    public function systemBusyLampFieldGetRequest18(\CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldGetRequest18 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemBusyLampFieldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemBusyLampFieldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemBusyLampFieldModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBusyLampFieldGetAvailableUserListRequest $request
     * @return UserBusyLampFieldGetAvailableUserListResponse
     * @throws ErrorResponseException
     */
    public function userBusyLampFieldGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBusyLampFieldGetRequest16sp2 $request
     * @return UserBusyLampFieldGetResponse16sp2
     * @throws ErrorResponseException
     */
    public function userBusyLampFieldGetRequest16sp2(\CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldGetRequest16sp2 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBusyLampFieldModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userBusyLampFieldModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBusyLampFieldModifyRequest $request)
    {
        return $this->call($request);
    }


}

