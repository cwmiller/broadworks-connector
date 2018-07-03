<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceDirectRoute
{

    /**
     * @param UserDirectRouteGetRequest $request
     * @return UserDirectRouteGetResponse|ErrorResponse
     */
    public function userDirectRouteGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserDirectRouteModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userDirectRouteModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserDirectRouteModifyRequest $request)
    {
        return $this->call($request);
    }


}

