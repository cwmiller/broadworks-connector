<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceDirectRoute
{

    /**
     * @param UserDirectRouteGetRequest $request
     * @return UserDirectRouteGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userDirectRouteGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDirectRouteModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userDirectRouteModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteModifyRequest $request)
    {
        return $this->call($request);
    }


}

