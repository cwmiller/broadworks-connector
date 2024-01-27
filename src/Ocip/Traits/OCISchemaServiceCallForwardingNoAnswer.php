<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerGetRequest13mp16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerGetResponse13mp16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallForwardingNoAnswer
{
    /**
     * @param UserCallForwardingNoAnswerGetRequest13mp16 $request
     * @return UserCallForwardingNoAnswerGetResponse13mp16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingNoAnswerGetRequest13mp16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerGetRequest13mp16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingNoAnswerModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingNoAnswerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerModifyRequest $request)
    {
        return $this->call($request);
    }
}

