<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyGetRequest17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyGetResponse17sp4;
use CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetAvailableMonitorsUserListRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetRequest13mp17;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetResponse13mp17;
use CWM\BroadWorksConnector\Ocip\Models\UserPrivacyModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServicePrivacy
{

    /**
     * @param GroupServiceInstancePrivacyGetRequest17sp4 $request
     * @return GroupServiceInstancePrivacyGetResponse17sp4
     */
    public function groupServiceInstancePrivacyGetRequest17sp4(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyGetRequest17sp4 $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupServiceInstancePrivacyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function groupServiceInstancePrivacyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupServiceInstancePrivacyModifyRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrivacyGetAvailableMonitorsUserListRequest $request
     * @return
     */
    public function userPrivacyGetAvailableMonitorsUserListRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetAvailableMonitorsUserListRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrivacyGetRequest13mp17 $request
     * @return UserPrivacyGetResponse13mp17
     */
    public function userPrivacyGetRequest13mp17(\CWM\BroadWorksConnector\Ocip\Models\UserPrivacyGetRequest13mp17 $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserPrivacyModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userPrivacyModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserPrivacyModifyRequest $request)
    {
        return $this->call($request);
    }


}

