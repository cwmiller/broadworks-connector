<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterRoutingPriorityOrder
 *
 * Call center routing order
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7553","type":"sequence"}]
 */
class CallCenterRoutingPriorityOrder
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7553
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group 4d65d3449061c568639c8cc1e2492285:7553
     * @MinInclusive 0.0
     * @MaxInclusive 1000000.0
     * @var float|null
     */
    protected $priority = null;

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
     * Getter for priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->priority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priority;
    }

    /**
     * Setter for priority
     *
     * @param float $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriority()
    {
        $this->priority = null;
        return $this;
    }
}

