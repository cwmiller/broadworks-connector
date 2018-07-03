<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceBargeInExempt
{

    /**
     * @param UserBargeInExemptGetRequest $request
     * @return UserBargeInExemptGetResponse
     */
    public function userBargeInExemptGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserBargeInExemptModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userBargeInExemptModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserBargeInExemptModifyRequest $request)
    {
        return $this->call($request);
    }


}

