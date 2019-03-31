<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGetInstanceRequest
 *
 * Request to get all the information of a flexible seating host instance.
 *         The response is either GroupFlexibleSeatingHostGetInstanceResponse or ErrorResponse.
 *
 * @see GroupFlexibleSeatingHostGetInstanceResponse
 * @see ErrorResponse
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:204","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGetInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 43afb2158d313a1d1a148124d7caba1e:204
     * @MinLength 1
     * @MaxLength 161
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

