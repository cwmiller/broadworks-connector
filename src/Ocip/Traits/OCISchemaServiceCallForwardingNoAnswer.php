<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerGetRequest13mp16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerGetResponse13;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallForwardingNoAnswer
{

    /**
     * @param UserCallForwardingNoAnswerGetRequest13mp16 $request
     * @return UserCallForwardingNoAnswerGetResponse13
     */
    public function userCallForwardingNoAnswerGetRequest13mp16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerGetRequest13mp16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingNoAnswerModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingNoAnswerModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingNoAnswerModifyRequest $request)
    {
        return $this->call($request);
    }


}

