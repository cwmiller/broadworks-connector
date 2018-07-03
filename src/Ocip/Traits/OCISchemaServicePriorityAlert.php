<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertAddCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePriorityAlert
{

    /**
     * @param UserPriorityAlertAddCriteriaRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPriorityAlertAddCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertAddCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPriorityAlertDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertGetCriteriaListRequest $request
     * @return UserPriorityAlertGetCriteriaListResponse|ErrorResponse
     */
    public function userPriorityAlertGetCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertGetCriteriaRequest21 $request
     * @return UserPriorityAlertGetCriteriaResponse21|ErrorResponse
     */
    public function userPriorityAlertGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertGetCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertModifyActiveCriteriaListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPriorityAlertModifyActiveCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertModifyActiveCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPriorityAlertModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPriorityAlertModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPriorityAlertModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }


}

