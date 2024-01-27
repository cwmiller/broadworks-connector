<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetAvailableMonitorsUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetAvailableMonitorsUserListResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetRequest13mp17;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetResponse13mp17;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServicePrivacy
{
    /**
     * @param GroupServiceInstancePrivacyGetRequest17sp4 $request
     * @return GroupServiceInstancePrivacyGetResponse17sp4
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupServiceInstancePrivacyGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceInstancePrivacyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupServiceInstancePrivacyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrivacyGetAvailableMonitorsUserListRequest $request
     * @return UserPrivacyGetAvailableMonitorsUserListResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPrivacyGetAvailableMonitorsUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetAvailableMonitorsUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrivacyGetRequest13mp17 $request
     * @return UserPrivacyGetResponse13mp17
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPrivacyGetRequest13mp17(\CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetRequest13mp17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrivacyModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userPrivacyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrivacyModifyRequest $request)
    {
        return $this->call($request);
    }
}

