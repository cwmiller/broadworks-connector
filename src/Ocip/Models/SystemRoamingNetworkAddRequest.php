<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkAddRequest
 *
 * Add a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoamingNetworkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mscAddress
     * @var string|null
     */
    private $mscAddress = null;

    /**
     * @ElementName networkTranslationIndex
     * @var string|null
     */
    private $networkTranslationIndex = null;

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

    /**
     * Getter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @return string|null
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @param string|null $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $this->networkTranslationIndex = $networkTranslationIndex;
        return $this;
    }


}

