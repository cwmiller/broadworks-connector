<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksCommunicatorGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksCommunicatorGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksCommunicatorModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksCommunicatorGetRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksCommunicatorGetResponse;

trait OCISchemaServiceCommunicator
{

    /**
     * @param ServiceProviderBroadWorksCommunicatorGetRequest $request
     * @return ServiceProviderBroadWorksCommunicatorGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksCommunicatorGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksCommunicatorGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ServiceProviderBroadWorksCommunicatorModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function serviceProviderBroadWorksCommunicatorModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderBroadWorksCommunicatorModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBroadWorksCommunicatorGetRequest $request
     * @return UserBroadWorksCommunicatorGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userBroadWorksCommunicatorGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBroadWorksCommunicatorGetRequest $request)
    {
        return $this->call($request);
    }


}

