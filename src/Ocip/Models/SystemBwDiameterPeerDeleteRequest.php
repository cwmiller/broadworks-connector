<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterPeerDeleteRequest
 *
 * Remove a Diameter peer.  A peer cannot be removed if is referenced by a Realm
 * Routing Table entry.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBwDiameterPeerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    private $instance = null;

    /**
     * @ElementName identity
     * @var string|null
     */
    private $identity = null;

    /**
     * Getter for instance
     *
     * @ElementName instance
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Setter for instance
     *
     * @ElementName instance
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null $instance
     * @return $this
     */
    public function setInstance(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Getter for identity
     *
     * @ElementName identity
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Setter for identity
     *
     * @ElementName identity
     * @param string|null $identity
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }


}

