<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetResponse20;
use CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequest20;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyActiveCriteriaListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequest20;
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
     * @param UserCustomRingbackUserAddCriteriaRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserAddCriteriaRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequest20 $request)
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
     * @param UserCustomRingbackUserGetCriteriaRequest21 $request
     * @return UserCustomRingbackUserGetCriteriaResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequest21 $request)
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
     * @param UserCustomRingbackUserModifyCriteriaRequest20 $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCustomRingbackUserModifyCriteriaRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequest20 $request)
    {
        return $this->call($request);
    }
}

