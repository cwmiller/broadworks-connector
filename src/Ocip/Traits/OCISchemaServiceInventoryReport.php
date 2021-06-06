<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupInventoryReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupInventoryReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemInventoryReportGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemInventoryReportGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemInventoryReportModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceInventoryReport
{

    /**
     * @param GroupInventoryReportGetRequest $request
     * @return GroupInventoryReportGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupInventoryReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupInventoryReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInventoryReportGetRequest $request
     * @return SystemInventoryReportGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemInventoryReportGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInventoryReportGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemInventoryReportModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemInventoryReportModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemInventoryReportModifyRequest $request)
    {
        return $this->call($request);
    }


}

