<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingGetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingGetResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceFaxMessaging
{

    /**
     * @param UserFaxMessagingGetRequest17sp1 $request
     * @return UserFaxMessagingGetResponse17sp1|ErrorResponse
     */
    public function userFaxMessagingGetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingGetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFaxMessagingModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userFaxMessagingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingModifyRequest $request)
    {
        return $this->call($request);
    }


}

