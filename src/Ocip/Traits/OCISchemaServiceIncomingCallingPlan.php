<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceIncomingCallingPlan
{

    /**
     * @param GroupIncomingCallingPlanGetListRequest $request
     * @return GroupIncomingCallingPlanGetListResponse|ErrorResponse
     */
    public function groupIncomingCallingPlanGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIncomingCallingPlanModifyListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupIncomingCallingPlanModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIncomingCallingPlanGetRequest $request
     * @return UserIncomingCallingPlanGetListResponse|ErrorResponse
     */
    public function userIncomingCallingPlanGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIncomingCallingPlanModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userIncomingCallingPlanModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanModifyRequest $request)
    {
        return $this->call($request);
    }


}

