<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyRequest17;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSimultaneousRingFamily
{
    /**
     * @param UserSimultaneousRingFamilyAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyAddCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingFamilyDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingFamilyGetCriteriaRequestRI $request
     * @return UserSimultaneousRingFamilyGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingFamilyGetRequest17 $request
     * @return UserSimultaneousRingFamilyGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingFamilyModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingFamilyModifyRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyRequest17 $request)
    {
        return $this->call($request);
    }
}

