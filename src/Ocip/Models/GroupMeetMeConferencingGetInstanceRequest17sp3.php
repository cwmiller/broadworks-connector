<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetInstanceRequest17sp3
 *
 * Request to get all the information of a Meet-Me Conferencing bridge.
 *         The response is either GroupMeetMeConferencingGetInstanceResponse or
 * ErrorResponse.
 */
class GroupMeetMeConferencingGetInstanceRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

