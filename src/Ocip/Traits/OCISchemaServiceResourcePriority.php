<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ResellerResourcePriorityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerResourcePriorityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerResourcePriorityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemResourcePriorityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemResourcePriorityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemResourcePriorityModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserResourcePriorityGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserResourcePriorityGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserResourcePriorityModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceResourcePriority
{
    /**
     * @param ResellerResourcePriorityGetRequest $request
     * @return ResellerResourcePriorityGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerResourcePriorityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerResourcePriorityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerResourcePriorityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerResourcePriorityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerResourcePriorityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemResourcePriorityGetRequest $request
     * @return SystemResourcePriorityGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemResourcePriorityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemResourcePriorityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemResourcePriorityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemResourcePriorityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemResourcePriorityModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserResourcePriorityGetRequest $request
     * @return UserResourcePriorityGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userResourcePriorityGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserResourcePriorityGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserResourcePriorityModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userResourcePriorityModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserResourcePriorityModifyRequest $request)
    {
        return $this->call($request);
    }
}

