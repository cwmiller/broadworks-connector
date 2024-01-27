<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAddAlertingGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAddAlertingGroupSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAddInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAlertingGroupGetAvailableUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAlertingGroupGetAvailableUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeDeleteAlertingGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeDeleteAlertingGroupSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeDeleteInstanceRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetInstanceListResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetInstanceRequest19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetInstanceResponse19sp1;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyActiveInstanceListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyAlertingGroupListRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyAlertingGroupRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyAlertingGroupSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyInstanceRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceFindMeFollowMe
{
    /**
     * @param GroupFindMeFollowMeAddAlertingGroupRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeAddAlertingGroupRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAddAlertingGroupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeAddAlertingGroupSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeAddAlertingGroupSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAddAlertingGroupSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeAddInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeAddInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAddInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeAlertingGroupGetAvailableUserListRequest $request
     * @return GroupFindMeFollowMeAlertingGroupGetAvailableUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeAlertingGroupGetAvailableUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeAlertingGroupGetAvailableUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeDeleteAlertingGroupRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeDeleteAlertingGroupRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeDeleteAlertingGroupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeDeleteAlertingGroupSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeDeleteAlertingGroupSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeDeleteAlertingGroupSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeDeleteInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeDeleteInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeDeleteInstanceRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeGetAlertingGroupListRequest $request
     * @return GroupFindMeFollowMeGetAlertingGroupListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeGetAlertingGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeGetAlertingGroupRequest $request
     * @return GroupFindMeFollowMeGetAlertingGroupResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeGetAlertingGroupRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21 $request
     * @return GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeGetInstanceListRequest $request
     * @return GroupFindMeFollowMeGetInstanceListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeGetInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeGetInstanceRequest19sp1 $request
     * @return GroupFindMeFollowMeGetInstanceResponse19sp1
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeGetInstanceRequest19sp1(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeGetInstanceRequest19sp1 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeModifyActiveInstanceListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeModifyActiveInstanceListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyActiveInstanceListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeModifyAlertingGroupListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeModifyAlertingGroupListRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyAlertingGroupListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeModifyAlertingGroupRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeModifyAlertingGroupRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyAlertingGroupRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeModifyAlertingGroupSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeModifyAlertingGroupSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyAlertingGroupSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupFindMeFollowMeModifyInstanceRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupFindMeFollowMeModifyInstanceRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupFindMeFollowMeModifyInstanceRequest $request)
    {
        return $this->call($request);
    }
}

