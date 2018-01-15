<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostDeleteInstanceRequest
 *
 * Delete a flexible seating host instance from a group. Host cannot be deleted
 * when a guest is associated to a host.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupFlexibleSeatingHostDeleteInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

