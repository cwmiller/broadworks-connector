<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGuestAssociationGetRequest
 *
 * Request the flexible seating host guest association details.
 *         The response is either a
 * GroupFlexibleSeatingHostGuestAssociationGetResponse or an ErrorResponse.
 * accessLevel is always set to Group for a Service Provider
 */
class GroupFlexibleSeatingHostGuestAssociationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

