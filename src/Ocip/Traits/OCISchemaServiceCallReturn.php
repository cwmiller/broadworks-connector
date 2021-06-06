<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallReturnGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallReturnGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallReturnModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallReturn
{

    /**
     * @param SystemCallReturnGetRequest $request
     * @return SystemCallReturnGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallReturnGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallReturnGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallReturnModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallReturnModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallReturnModifyRequest $request)
    {
        return $this->call($request);
    }


}

