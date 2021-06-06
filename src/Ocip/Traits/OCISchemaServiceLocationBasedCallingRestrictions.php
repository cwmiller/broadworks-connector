<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsGetRequest17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsGetResponse17sp3;
use CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceLocationBasedCallingRestrictions
{

    /**
     * @param SystemLocationBasedCallingRestrictionsGetRequest17sp3 $request
     * @return SystemLocationBasedCallingRestrictionsGetResponse17sp3
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLocationBasedCallingRestrictionsGetRequest17sp3(\CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsGetRequest17sp3 $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemLocationBasedCallingRestrictionsModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemLocationBasedCallingRestrictionsModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemLocationBasedCallingRestrictionsModifyRequest $request)
    {
        return $this->call($request);
    }


}

