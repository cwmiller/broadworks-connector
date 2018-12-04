<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterRoutingPriorityOrder
 *
 * Call center routing order
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6792","type":"sequence"}]
 */
class CallCenterRoutingPriorityOrder
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6792
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6792
     * @var float|null
     */
    private $priority = null;

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

