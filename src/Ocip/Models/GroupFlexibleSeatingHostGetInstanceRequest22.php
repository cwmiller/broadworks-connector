<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGetInstanceRequest22
 *
 * Request to get all the information of a flexible seating host instance.
 *         The response is either GroupFlexibleSeatingHostGetInstanceResponse22 or ErrorResponse.
 *
 * @see GroupFlexibleSeatingHostGetInstanceResponse22
 * @see ErrorResponse
 * @Groups [{"id":"1d4e390f8cd01ca6f92589024d74dac6:182","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGetInstanceRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:182
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

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

