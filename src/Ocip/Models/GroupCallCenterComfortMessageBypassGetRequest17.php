<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterComfortMessageBypassGetRequest17
 *
 * Get a call center's comfort message bypass settings.
 *         The response is either a
 * GroupCallCenterComfortMessageBypassGetResponse17 or an ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterComfortMessageBypassGetRequest20
 *
 * @see GroupCallCenterComfortMessageBypassGetResponse17
 * @see ErrorResponse
 * @see GroupCallCenterComfortMessageBypassGetRequest20
 */
class GroupCallCenterComfortMessageBypassGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

