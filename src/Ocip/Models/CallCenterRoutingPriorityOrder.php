<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterRoutingPriorityOrder
 *
 * Call center routing order
 */
class CallCenterRoutingPriorityOrder
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName priority
     * @var float|null
     */
    private $priority = null;

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
     * Getter for priority
     *
     * @ElementName priority
     * @return float|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param float|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }


}

