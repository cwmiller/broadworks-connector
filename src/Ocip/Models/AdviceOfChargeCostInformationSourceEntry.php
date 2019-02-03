<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AdviceOfChargeCostInformationSourceEntry
 *
 * The advice of charge cost information source entry.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18460","type":"sequence"}]
 */
class AdviceOfChargeCostInformationSourceEntry
{

    /**
     * @ElementName peerIdentity
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18460
     * @var string|null
     */
    private $peerIdentity = null;

    /**
     * @ElementName priority
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18460
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

