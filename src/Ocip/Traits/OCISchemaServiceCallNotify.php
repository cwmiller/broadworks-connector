<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyAddCriteriaRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCallNotify
{

    /**
     * @param SystemCallNotifyGetRequest $request
     * @return SystemCallNotifyGetResponse
     */
    public function systemCallNotifyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallNotifyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function systemCallNotifyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyAddCriteriaRequest16 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallNotifyAddCriteriaRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyAddCriteriaRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallNotifyDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyGetCriteriaRequest21 $request
     * @return UserCallNotifyGetCriteriaResponse21|ErrorResponse
     */
    public function userCallNotifyGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyGetRequest $request
     * @return UserCallNotifyGetResponse|ErrorResponse
     */
    public function userCallNotifyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyModifyCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallNotifyModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCallNotifyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyRequest $request)
    {
        return $this->call($request);
    }


}

