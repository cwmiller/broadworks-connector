<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGetInstanceRequest
 *
 * Request to get all the information of a flexible seating host instance.
 *         The response is either GroupFlexibleSeatingHostGetInstanceResponse or
 * ErrorResponse.
 */
class GroupFlexibleSeatingHostGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

