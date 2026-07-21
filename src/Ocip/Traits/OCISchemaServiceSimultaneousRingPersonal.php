<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetRequest17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetResponse17;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyRequest17;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceSimultaneousRingPersonal
{
    /**
     * @param UserSimultaneousRingPersonalAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalAddCriteriaRequestRI $request)
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
     * @param UserSimultaneousRingPersonalGetCriteriaRequestRI $request
     * @return UserSimultaneousRingPersonalGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaRequestRI $request)
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
     * @param UserSimultaneousRingPersonalModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userSimultaneousRingPersonalModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyCriteriaRequestRI $request)
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

