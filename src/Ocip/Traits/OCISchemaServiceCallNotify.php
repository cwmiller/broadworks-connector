<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\ResellerCallNotifyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallNotifyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\ResellerCallNotifyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallNotify
{
    /**
     * @param ResellerCallNotifyGetRequest $request
     * @return ResellerCallNotifyGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallNotifyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallNotifyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param ResellerCallNotifyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function resellerCallNotifyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\ResellerCallNotifyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallNotifyGetRequest $request
     * @return SystemCallNotifyGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallNotifyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemCallNotifyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemCallNotifyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemCallNotifyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyAddCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyGetCriteriaRequestRI $request
     * @return UserCallNotifyGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyGetRequest $request
     * @return UserCallNotifyGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallNotifyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallNotifyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallNotifyModifyRequest $request)
    {
        return $this->call($request);
    }
}

