<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingGetRequest17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingGetResponse17sp1;
use CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceFaxMessaging
{

    /**
     * @param UserFaxMessagingGetRequest17sp1 $request
     * @return UserFaxMessagingGetResponse17sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userFaxMessagingGetRequest17sp1(\CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingGetRequest17sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserFaxMessagingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userFaxMessagingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserFaxMessagingModifyRequest $request)
    {
        return $this->call($request);
    }


}

