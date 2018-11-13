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
 *
 * @see GroupCallCenterQueueCallDispositionCodeSettingsGetResponse
 * @see ErrorResponse
 */
class GroupCallCenterQueueCallDispositionCodeSettingsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

