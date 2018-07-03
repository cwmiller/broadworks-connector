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
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceCustomRingback
{

    /**
     * @param GroupCustomRingbackGroupGetRequest20 $request
     * @return GroupCustomRingbackGroupGetResponse20|ErrorResponse
     */
    public function groupCustomRingbackGroupGetRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupGetRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupCustomRingbackGroupModifyRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupCustomRingbackGroupModifyRequest20(\CWM\BroadWorksConnector\Ocip\Models\GroupCustomRingbackGroupModifyRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserAddCriteriaRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCustomRingbackUserAddCriteriaRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserAddCriteriaRequest20 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserDeleteCriteriaRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCustomRingbackUserDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserGetCriteriaListRequest $request
     * @return UserCustomRingbackUserGetCriteriaListResponse|ErrorResponse
     */
    public function userCustomRingbackUserGetCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserGetCriteriaRequest21 $request
     * @return UserCustomRingbackUserGetCriteriaResponse21|ErrorResponse
     */
    public function userCustomRingbackUserGetCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserGetCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserModifyActiveCriteriaListRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCustomRingbackUserModifyActiveCriteriaListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyActiveCriteriaListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCustomRingbackUserModifyCriteriaRequest20 $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userCustomRingbackUserModifyCriteriaRequest20(\CWM\BroadWorksConnector\Ocip\Models\UserCustomRingbackUserModifyCriteriaRequest20 $request)
    {
        return $this->call($request);
    }


}

