<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveAddCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallForwardingSelective
{

    /**
     * @param UserCallForwardingSelectiveAddCriteriaRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingSelectiveAddCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveAddCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingSelectiveDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveGetCriteriaRequest21 $request
     * @return UserCallForwardingSelectiveGetCriteriaResponse21|ErrorResponse
     */
    public function userCallForwardingSelectiveGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveGetRequest16 $request
     * @return UserCallForwardingSelectiveGetResponse16|ErrorResponse
     */
    public function userCallForwardingSelectiveGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingSelectiveModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallForwardingSelectiveModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyRequest $request)
    {
        return $this->call($request);
    }


}

