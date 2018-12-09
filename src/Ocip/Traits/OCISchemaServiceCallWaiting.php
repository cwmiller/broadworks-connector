<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallWaitingGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallWaitingGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallWaitingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallWaitingGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserCallWaitingGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserCallWaitingModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallWaiting
{

    /**
     * @param SystemCallWaitingGetRequest $request
     * @return SystemCallWaitingGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallWaitingGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallWaitingGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallWaitingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallWaitingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallWaitingModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallWaitingGetRequest17sp4 $request
     * @return UserCallWaitingGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallWaitingGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\UserCallWaitingGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallWaitingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallWaitingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallWaitingModifyRequest $request)
    {
        return $this->call($request);
    }


}

