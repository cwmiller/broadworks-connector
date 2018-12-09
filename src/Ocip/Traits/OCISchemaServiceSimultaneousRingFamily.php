<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyAddCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetCriteriaResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyRequest17;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSimultaneousRingFamily
{

    /**
     * @param UserSimultaneousRingFamilyAddCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyAddCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyAddCriteriaRequest $request)
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
     * @param UserSimultaneousRingFamilyGetCriteriaRequest $request
     * @return UserSimultaneousRingFamilyGetCriteriaResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyGetCriteriaRequest $request)
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
     * @param UserSimultaneousRingFamilyModifyCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingFamilyModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingFamilyModifyCriteriaRequest $request)
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

