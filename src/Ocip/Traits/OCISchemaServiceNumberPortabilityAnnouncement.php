<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementModifyRequest;
use CWM\BroadWorksConnector\Ocip\Models\C\SuccessResponse;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

trait OCISchemaServiceNumberPortabilityAnnouncement
{

    /**
     * @param UserNumberPortabilityAnnouncementGetRequest $request
     * @return UserNumberPortabilityAnnouncementGetResponse|ErrorResponse
     */
    public function userNumberPortabilityAnnouncementGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param UserNumberPortabilityAnnouncementModifyRequest $request
     * @return SuccessResponse|ErrorResponse
     */
    public function userNumberPortabilityAnnouncementModifyRequest(\CWM\BroadWorksConnector\Ocip\Models\UserNumberPortabilityAnnouncementModifyRequest $request)
    {
        return $this->call($request);
    }


}

