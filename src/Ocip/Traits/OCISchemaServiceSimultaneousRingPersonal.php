<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalAddCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyRequest17;
use \CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use \CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSimultaneousRingPersonal
{

    /**
     * @param UserSimultaneousRingPersonalAddCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalAddCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalAddCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalGetCriteriaRequest $request
     * @return UserSimultaneousRingPersonalGetCriteriaResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalGetRequest17 $request
     * @return UserSimultaneousRingPersonalGetResponse17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalModifyCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalModifyRequest17 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyRequest17 $request)
    {
        return $this->call($request);
    }


}

