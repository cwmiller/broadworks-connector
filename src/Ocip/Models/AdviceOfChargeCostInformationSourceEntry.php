<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AdviceOfChargeCostInformationSourceEntry
 *
 * The advice of charge cost information source entry.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17305","type":"sequence"}]
 */
class AdviceOfChargeCostInformationSourceEntry
{

    /**
     * @ElementName peerIdentity
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17305
     * @var string|null
     */
    private $peerIdentity = null;

    /**
     * @ElementName priority
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:17305
     * @var int|null
     */
    private $priority = null;

    /**
     * Getter for peerIdentity
     *
     * @return string
     */
    public function getPeerIdentity()
    {
        return $this->peerIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->peerIdentity;
    }

    /**
     * Setter for peerIdentity
     *
     * @param string $peerIdentity
     * @return $this
     */
    public function setPeerIdentity($peerIdentity)
    {
        $this->peerIdentity = $peerIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeerIdentity()
    {
        $this->peerIdentity = null;
        return $this;
    }

    /**
     * Getter for priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priority;
    }

    /**
     * Setter for priority
     *
     * @param int $priority
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

