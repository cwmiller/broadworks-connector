<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueCallDispositionCodeSettingsGetRequest
 *
 * Request the user level data associated with Call Center Call Disposition Code
 * Settings.
 *         The response is either a
 * GroupCallCenterQueueCallDispositionCodeSettingsGetResponse or an
 *         ErrorResponse.
 */
class GroupCallCenterQueueCallDispositionCodeSettingsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}

