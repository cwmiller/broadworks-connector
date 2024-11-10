<?php

namespace CWM\BroadWorksConnector\Ocip\Traits;

use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileLocationGetRequest;
use CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileLocationGetResponse;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileLocationGetRequest;
use CWM\BroadWorksConnector\Ocip\ErrorResponseException;
use CWM\BroadWorksConnector\Ocip\Validation\ValidationException;
use CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileLocationGetResponse;

trait OCISchemaHidden
{
    /**
     * @param UserAnnouncementFileLocationGetRequest $request
     * @return UserAnnouncementFileLocationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function userAnnouncementFileLocationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\UserAnnouncementFileLocationGetRequest $request)
    {
        return $this->call($request);
    }

    /**
     * @param GroupAnnouncementFileLocationGetRequest $request
     * @return GroupAnnouncementFileLocationGetResponse
     * @throws ErrorResponseException
     * @throws ValidationException
     */
    public function groupAnnouncementFileLocationGetRequest(\CWM\BroadWorksConnector\Ocip\Models\GroupAnnouncementFileLocationGetRequest $request)
    {
        return $this->call($request);
    }
}

