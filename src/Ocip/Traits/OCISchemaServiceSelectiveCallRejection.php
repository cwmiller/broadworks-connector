<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSelectiveCallRejection
{
    /**
     * @param UserSelectiveCallRejectionAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionAddCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionGetCriteriaListRequest $request
     * @return UserSelectiveCallRejectionGetCriteriaListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionGetCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionGetCriteriaRequestRI $request
     * @return UserSelectiveCallRejectionGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionModifyActiveCriteriaListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionModifyActiveCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyActiveCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSelectiveCallRejectionModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyCriteriaRequestRI $request)
    {
        return $this->call($request);
    }
}

