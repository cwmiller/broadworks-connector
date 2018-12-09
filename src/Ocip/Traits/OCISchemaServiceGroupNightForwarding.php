<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupGroupNightForwardingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupNightForwardingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupGroupNightForwardingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemGroupNightForwardingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemGroupNightForwardingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemGroupNightForwardingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupNightForwardingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupNightForwardingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserGroupNightForwardingModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceGroupNightForwarding
{

    /**
     * @param GroupGroupNightForwardingGetRequest $request
     * @return GroupGroupNightForwardingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupNightForwardingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupNightForwardingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupGroupNightForwardingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupGroupNightForwardingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupGroupNightForwardingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemGroupNightForwardingGetRequest $request
     * @return SystemGroupNightForwardingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemGroupNightForwardingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemGroupNightForwardingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemGroupNightForwardingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemGroupNightForwardingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemGroupNightForwardingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGroupNightForwardingGetRequest $request
     * @return UserGroupNightForwardingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userGroupNightForwardingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGroupNightForwardingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserGroupNightForwardingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userGroupNightForwardingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserGroupNightForwardingModifyRequest $request)
    {
        return $this->call($request);
    }


}

