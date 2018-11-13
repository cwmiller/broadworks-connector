<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeCostInformationSourceModifyRequest
 *
 * Modify a cost information source.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAdviceOfChargeCostInformationSourceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName peerIdentity
     * @Type string
     * @var string|null
     */
    private $peerIdentity = null;

    /**
     * @ElementName priority
     * @Type int
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

