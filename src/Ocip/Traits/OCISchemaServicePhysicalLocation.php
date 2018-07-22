<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServicePhysicalLocation
{

    /**
     * @param SystemPhysicalLocationGetRequest $request
     * @return SystemPhysicalLocationGetResponse
     * @throws ErrorResponseException
     */
    public function systemPhysicalLocationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPhysicalLocationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function systemPhysicalLocationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPhysicalLocationModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhysicalLocationGetRequest $request
     * @return UserPhysicalLocationGetResponse
     * @throws ErrorResponseException
     */
    public function userPhysicalLocationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPhysicalLocationModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function userPhysicalLocationModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPhysicalLocationModifyRequest $request)
    {
        return $this->call($request);
    }


}

