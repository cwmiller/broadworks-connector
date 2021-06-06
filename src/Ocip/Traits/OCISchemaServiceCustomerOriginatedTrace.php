<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCustomerOriginatedTrace
{

    /**
     * @param SystemCustomerOriginatedTraceGetRequest $request
     * @return SystemCustomerOriginatedTraceGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCustomerOriginatedTraceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCustomerOriginatedTraceModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCustomerOriginatedTraceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceModifyRequest $request)
    {
        return $this->call($request);
    }


}

