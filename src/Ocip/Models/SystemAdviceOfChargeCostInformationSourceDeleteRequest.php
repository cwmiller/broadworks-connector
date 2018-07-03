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
     * @var string|null
     */
    private $peerIdentity = null;

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


}

