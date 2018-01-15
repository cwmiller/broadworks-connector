<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentAvailability
 *
 * Specifies an agent's login state (availability) for a particular Call Center.
 */
class CallCenterAgentAvailability extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName available
     * @var bool|null
     */
    private $available = null;

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

    /**
     * Getter for available
     *
     * @ElementName available
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Setter for available
     *
     * @ElementName available
     * @param bool|null $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }


}

