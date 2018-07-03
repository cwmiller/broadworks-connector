<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCustomerOriginatedTrace
{

    /**
     * @param SystemCustomerOriginatedTraceGetRequest $request
     * @return SystemCustomerOriginatedTraceGetResponse
     */
    public function systemCustomerOriginatedTraceGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCustomerOriginatedTraceModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCustomerOriginatedTraceModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCustomerOriginatedTraceModifyRequest $request)
    {
        return $this->call($request);
    }


}

