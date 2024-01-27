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
 * @Groups [{"id":"9975efc7f5883a0595f811ee72ba4df5:171","type":"sequence"}]
 */
class SystemAdviceOfChargeCostInformationSourceDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName peerIdentity
     * @Type string
     * @Group 9975efc7f5883a0595f811ee72ba4df5:171
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $peerIdentity = null;

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

