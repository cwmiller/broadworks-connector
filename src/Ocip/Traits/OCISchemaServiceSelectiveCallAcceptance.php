<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSelectiveCallAcceptance
{
    /**
     * @param UserSelectiveCallAcceptanceAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceAddCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceGetCriteriaListRequest $request
     * @return UserSelectiveCallAcceptanceGetCriteriaListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceGetCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceGetCriteriaRequestRI $request
     * @return UserSelectiveCallAcceptanceGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceGetCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceModifyActiveCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallAcceptanceModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallAcceptanceModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallAcceptanceModifyCriteriaRequestRI $request)
    {
        return $this->call($request);
    }
}

