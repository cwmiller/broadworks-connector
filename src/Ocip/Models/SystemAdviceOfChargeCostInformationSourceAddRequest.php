<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeCostInformationSourceAddRequest
 *
 * Add a cost information source. The response is either SuccessResponse or
 * ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAdviceOfChargeCostInformationSourceAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName peerIdentity
     * @var string|null
     */
    private $peerIdentity = null;

    /**
     * @ElementName priority
     * @var int|null
     */
    private $priority = null;

    /**
     * Getter for peerIdentity
     *
     * @ElementName peerIdentity
     * @return string|null
     */
    public function getPeerIdentity()
    {
        return $this->peerIdentity;
    }

    /**
     * Setter for peerIdentity
     *
     * @ElementName peerIdentity
     * @param string|null $peerIdentity
     * @return $this
     */
    public function setPeerIdentity($peerIdentity)
    {
        $this->peerIdentity = $peerIdentity;
        return $this;
    }

    /**
     * Getter for priority
     *
     * @ElementName priority
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param int|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }


}

