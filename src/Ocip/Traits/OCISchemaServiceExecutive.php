<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemExecutiveGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemExecutiveGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemExecutiveModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAddFilteringSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveDeleteFilteringSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetAssistantRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetAssistantResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetAvailableAssistantListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetAvailableAssistantListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetFilteringRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetFilteringResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetFilteringSelectiveCriteriaRequest21;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetFilteringSelectiveCriteriaResponse21;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetScreeningAlertingRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetScreeningAlertingResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyAssistantRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyFilteringRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyFilteringSelectiveCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyScreeningAlertingRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceExecutive
{
    /**
     * @param SystemExecutiveGetRequest $request
     * @return SystemExecutiveGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemExecutiveGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemExecutiveGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemExecutiveModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemExecutiveModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemExecutiveModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveAddFilteringSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveAddFilteringSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveAddFilteringSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveDeleteFilteringSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveDeleteFilteringSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveDeleteFilteringSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveGetAssistantRequest $request
     * @return UserExecutiveGetAssistantResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveGetAssistantRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetAssistantRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveGetAvailableAssistantListRequest $request
     * @return UserExecutiveGetAvailableAssistantListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveGetAvailableAssistantListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetAvailableAssistantListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveGetFilteringRequest $request
     * @return UserExecutiveGetFilteringResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveGetFilteringRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetFilteringRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveGetFilteringSelectiveCriteriaRequest21 $request
     * @return UserExecutiveGetFilteringSelectiveCriteriaResponse21
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveGetFilteringSelectiveCriteriaRequest21(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetFilteringSelectiveCriteriaRequest21 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveGetScreeningAlertingRequest $request
     * @return UserExecutiveGetScreeningAlertingResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveGetScreeningAlertingRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveGetScreeningAlertingRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveModifyAssistantRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveModifyAssistantRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyAssistantRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveModifyFilteringRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveModifyFilteringRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyFilteringRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveModifyFilteringSelectiveCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveModifyFilteringSelectiveCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyFilteringSelectiveCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserExecutiveModifyScreeningAlertingRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userExecutiveModifyScreeningAlertingRequest(\CWM\BroadWorksConnector\Ocip\Models\UserExecutiveModifyScreeningAlertingRequest $request)
    {
        return $this->call($request);
    }
}

