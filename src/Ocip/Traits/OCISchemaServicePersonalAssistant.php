<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallToNumberGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallToNumberGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantAddCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantDeleteCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetCriteriaResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetRequest24;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetResponse24;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantModifyCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantReorderCriteriaRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServicePersonalAssistant
{
    /**
     * @param SystemPersonalAssistantGetRequest $request
     * @return SystemPersonalAssistantGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPersonalAssistantGetRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param SystemPersonalAssistantModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function systemPersonalAssistantModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserCallToNumberGetAvailableListRequest $request
     * @return UserCallToNumberGetAvailableListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userCallToNumberGetAvailableListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserCallToNumberGetAvailableListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantAddCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantAddCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantAddCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantCallToNumberGetListRequest $request
     * @return UserPersonalAssistantCallToNumberGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantCallToNumberGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantCallToNumberModifyListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantCallToNumberModifyListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberModifyListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantDeleteCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantDeleteCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantDeleteCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantExclusionNumberAddRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantExclusionNumberAddRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberAddRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantExclusionNumberDeleteListRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantExclusionNumberDeleteListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberDeleteListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantExclusionNumberGetListRequest $request
     * @return UserPersonalAssistantExclusionNumberGetListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantExclusionNumberGetListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantExclusionNumberGetRequest $request
     * @return UserPersonalAssistantExclusionNumberGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantExclusionNumberGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantExclusionNumberModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantExclusionNumberModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantGetCriteriaRequest $request
     * @return UserPersonalAssistantGetCriteriaResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantGetCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantGetRequest24 $request
     * @return UserPersonalAssistantGetResponse24
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantGetRequest24(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetRequest24 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantModifyCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantModifyCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantModifyCriteriaRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPersonalAssistantReorderCriteriaRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantReorderCriteriaRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantReorderCriteriaRequest $request)
    {
        return $this->call($request);
    }
}

