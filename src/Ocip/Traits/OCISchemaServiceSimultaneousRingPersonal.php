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
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceSimultaneousRingPersonal
{

    /**
     * @param UserSimultaneousRingPersonalAddCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSimultaneousRingPersonalAddCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalAddCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSimultaneousRingPersonalDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalGetCriteriaRequest $request
     * @return UserSimultaneousRingPersonalGetCriteriaResponse|ErrorResponse
     */
    public function userSimultaneousRingPersonalGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalGetRequest17 $request
     * @return UserSimultaneousRingPersonalGetResponse17|ErrorResponse
     */
    public function userSimultaneousRingPersonalGetRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalGetRequest17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSimultaneousRingPersonalModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserSimultaneousRingPersonalModifyRequest17 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userSimultaneousRingPersonalModifyRequest17(\CWM\BroadWorksConnector\Ocip\Models\UserSimultaneousRingPersonalModifyRequest17 $request)
    {
        return $this->call($request);
    }


}

