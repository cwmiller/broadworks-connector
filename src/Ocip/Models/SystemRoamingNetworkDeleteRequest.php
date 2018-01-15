<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkDeleteRequest
 *
 * Delete a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoamingNetworkDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mscAddress
     * @var string|null
     */
    private $mscAddress = null;

    /**
     * Getter for mscAddress
     *
     * @ElementName mscAddress
     * @return string|null
     */
    public function getMscAddress()
    {
        return $this->mscAddress;
    }

    /**
     * Setter for mscAddress
     *
     * @ElementName mscAddress
     * @param string|null $mscAddress
     * @return $this
     */
    public function setMscAddress($mscAddress)
    {
        $this->mscAddress = $mscAddress;
        return $this;
    }


}

