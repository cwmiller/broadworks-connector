<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\SystemPersonalAssistantModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallToNumberGetAvailableListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserCallToNumberGetAvailableListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantCallToNumberModifyListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberAddRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberDeleteListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetListRequest;
use CWM\BroadWorksConnector\Ocip\Models\userPersonalAssistantExclusionNumberGetListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantExclusionNumberModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetRequest22;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetResponse22;
use CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantModifyRequest;
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
     * @return userPersonalAssistantExclusionNumberGetListResponse
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
     * @param UserPersonalAssistantGetRequest22 $request
     * @return UserPersonalAssistantGetResponse22
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPersonalAssistantGetRequest22(\CWM\BroadWorksConnector\Ocip\Models\UserPersonalAssistantGetRequest22 $request)
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


}

