<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanModifyRequest;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceIncomingCallingPlan
{

    /**
     * @param GroupIncomingCallingPlanGetListRequest $request
     * @return GroupIncomingCallingPlanGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupIncomingCallingPlanGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupIncomingCallingPlanModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupIncomingCallingPlanModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupIncomingCallingPlanModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIncomingCallingPlanGetRequest $request
     * @return UserIncomingCallingPlanGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userIncomingCallingPlanGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserIncomingCallingPlanModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userIncomingCallingPlanModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserIncomingCallingPlanModifyRequest $request)
    {
        return $this->call($request);
    }


}

