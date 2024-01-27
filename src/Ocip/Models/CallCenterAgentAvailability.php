<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentAvailability
 *
 * Specifies an agent's login state (availability) for a particular Call Center.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:249","type":"sequence"}]
 */
class CallCenterAgentAvailability
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:249
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName available
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:249
     * @var bool|null
     */
    protected $available = null;

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

    /**
     * Getter for available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->available;
    }

    /**
     * Setter for available
     *
     * @param bool $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailable()
    {
        $this->available = null;
        return $this;
    }
}

