<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;

trait OCISchemaServiceNumberPortabilityAnnouncement
{

    /**
     * @param UserNumberPortabilityAnnouncementGetRequest $request
     * @return UserNumberPortabilityAnnouncementGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userNumberPortabilityAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserNumberPortabilityAnnouncementModifyRequest $request
     * @return SuccessResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userNumberPortabilityAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }


}

