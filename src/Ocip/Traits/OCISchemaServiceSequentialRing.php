<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingAddCriteriaRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingGetCriteriaRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingGetCriteriaResponse23;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingGetRequest14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingGetResponse14sp4;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingModifyCriteriaRequest23;
use CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSequentialRing
{
    /**
     * @param UserSequentialRingAddCriteriaRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSequentialRingAddCriteriaRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingAddCriteriaRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSequentialRingDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSequentialRingDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSequentialRingGetCriteriaRequest23 $request
     * @return UserSequentialRingGetCriteriaResponse23
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSequentialRingGetCriteriaRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingGetCriteriaRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSequentialRingGetRequest14sp4 $request
     * @return UserSequentialRingGetResponse14sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSequentialRingGetRequest14sp4(\CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingGetRequest14sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSequentialRingModifyCriteriaRequest23 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSequentialRingModifyCriteriaRequest23(\CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingModifyCriteriaRequest23 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSequentialRingModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSequentialRingModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSequentialRingModifyRequest $request)
    {
        return $this->call($request);
    }
}

