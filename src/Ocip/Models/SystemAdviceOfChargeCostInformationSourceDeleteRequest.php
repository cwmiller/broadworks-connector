<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeCostInformationSourceDeleteRequest
 *
 * Delete a cost information source.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAdviceOfChargeCostInformationSourceDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName peerIdentity
     * @Type string
     * @var string|null
     */
    private $peerIdentity = null;

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


}

