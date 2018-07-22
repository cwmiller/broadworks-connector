<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAddDigitPatternRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanDeleteDigitPatternListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanGetDigitPatternListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanGetDigitPatternListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanModifyDigitPatternRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallingPlan
{

    /**
     * @param GroupCallingPlanAddDigitPatternRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallingPlanAddDigitPatternRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAddDigitPatternRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallingPlanDeleteDigitPatternListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallingPlanDeleteDigitPatternListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanDeleteDigitPatternListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallingPlanGetDigitPatternListRequest $request
     * @return GroupCallingPlanGetDigitPatternListResponse
     * @throws ErrorResponseException
     */
    public function groupCallingPlanGetDigitPatternListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanGetDigitPatternListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCallingPlanModifyDigitPatternRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     */
    public function groupCallingPlanModifyDigitPatternRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanModifyDigitPatternRequest $request)
    {
        return $this->call($request);
    }


}

