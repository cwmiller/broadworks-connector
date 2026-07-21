<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaResponseRI;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequestRI;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceCustomRingback
{
    /**
     * @param GroupCustomRingbackGroupGetRequest20 $request
     * @return GroupCustomRingbackGroupGetResponse20
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCustomRingbackGroupGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomRingbackGroupModifyRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupCustomRingbackGroupModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserAddCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserAddCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserGetCriteriaListRequest $request
     * @return UserCustomRingbackUserGetCriteriaListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserGetCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserGetCriteriaRequestRI $request
     * @return UserCustomRingbackUserGetCriteriaResponseRI
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserGetCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequestRI $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserModifyActiveCriteriaListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserModifyActiveCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyActiveCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserModifyCriteriaRequestRI $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserModifyCriteriaRequestRI(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequestRI $request)
    {
        return $this->call($request);
    }
}

