<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueStatusNotificationGetRequest
 *
 * Get the status configuration for a given call center.
 *         The response is either a
 * GroupCallCenterQueueStatusNotificationGetResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

