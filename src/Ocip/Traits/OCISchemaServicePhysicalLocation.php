<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePhysicalLocation
{

    /**
     * @param SystemPhysicalLocationGetRequest $request
     * @return SystemPhysicalLocationGetResponse|ErrorResponse
     */
    public function systemPhysicalLocationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPhysicalLocationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemPhysicalLocationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhysicalLocationGetRequest $request
     * @return UserPhysicalLocationGetResponse|ErrorResponse
     */
    public function userPhysicalLocationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhysicalLocationModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPhysicalLocationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationModifyRequest $request)
    {
        return $this->call($request);
    }


}

