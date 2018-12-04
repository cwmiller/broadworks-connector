<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentAvailability
 *
 * Specifies an agent's login state (availability) for a particular Call Center.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:237","type":"sequence"}]
 */
class CallCenterAgentAvailability extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:237
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName available
     * @Type bool
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:237
     * @var bool|null
     */
    private $available = null;

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

