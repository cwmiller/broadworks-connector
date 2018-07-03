<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceAddCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSelectiveCallAcceptance
{

    /**
     * @param UserSelectiveCallAcceptanceAddCriteriaRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSelectiveCallAcceptanceAddCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceAddCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSelectiveCallAcceptanceDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceGetCriteriaListRequest $request
     * @return UserSelectiveCallAcceptanceGetResponse|ErrorResponse
     */
    public function userSelectiveCallAcceptanceGetCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceGetCriteriaRequest21 $request
     * @return UserSelectiveCallAcceptanceGetCriteriaResponse21|ErrorResponse
     */
    public function userSelectiveCallAcceptanceGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSelectiveCallAcceptanceModifyActiveCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSelectiveCallAcceptanceModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }


}

