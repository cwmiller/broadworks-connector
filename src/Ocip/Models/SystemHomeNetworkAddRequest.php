<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkAddRequest
 *
 * Add a Home Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemHomeNetworkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

