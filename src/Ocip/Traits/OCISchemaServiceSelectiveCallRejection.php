<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionAddCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyCriteriaRequest16;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSelectiveCallRejection
{

    /**
     * @param UserSelectiveCallRejectionAddCriteriaRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionAddCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionAddCriteriaRequest16 $request)
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
     * @param UserSelectiveCallRejectionGetCriteriaRequest21 $request
     * @return UserSelectiveCallRejectionGetCriteriaResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionGetCriteriaRequest21 $request)
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
     * @param UserSelectiveCallRejectionModifyCriteriaRequest16 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSelectiveCallRejectionModifyCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserSelectiveCallRejectionModifyCriteriaRequest16 $request)
    {
        return $this->call($request);
    }


}

