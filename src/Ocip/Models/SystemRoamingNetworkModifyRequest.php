<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoamingNetworkModifyRequest
 *
 * Modify a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemRoamingNetworkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mscAddress
     * @var string|null
     */
    private $mscAddress = null;

    /**
     * @ElementName networkTranslationIndex
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @ElementName networkTranslationIndex
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $this->networkTranslationIndex = $networkTranslationIndex;
        return $this;
    }


}

