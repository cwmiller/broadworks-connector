<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetRequest16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetResponse16;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCallForwardingSelective
{
    /**
     * @param UserCallForwardingSelectiveAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveAddCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveGetCriteriaRequestRI $request
     * @return UserCallForwardingSelectiveGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveGetRequest16 $request
     * @return UserCallForwardingSelectiveGetResponse16
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveGetRequest16(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveGetRequest16 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallForwardingSelectiveModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallForwardingSelectiveModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallForwardingSelectiveModifyRequest $request)
    {
        return $this->call($request);
    }
}

