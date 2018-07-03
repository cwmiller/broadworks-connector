<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallMeNowGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallMeNowGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallMeNowModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowAddCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowGetCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowGetCriteriaResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallMeNow
{

    /**
     * @param SystemCallMeNowGetRequest $request
     * @return SystemCallMeNowGetResponse|ErrorResponse
     */
    public function systemCallMeNowGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallMeNowGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallMeNowModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallMeNowModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallMeNowModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallMeNowAddCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallMeNowAddCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowAddCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallMeNowDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallMeNowDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallMeNowGetCriteriaRequest $request
     * @return UserCallMeNowGetCriteriaResponse|ErrorResponse
     */
    public function userCallMeNowGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowGetCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallMeNowGetRequest $request
     * @return UserCallMeNowGetResponse|ErrorResponse
     */
    public function userCallMeNowGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallMeNowModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallMeNowModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallMeNowModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallMeNowModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallMeNowModifyRequest $request)
    {
        return $this->call($request);
    }


}

