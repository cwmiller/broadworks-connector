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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15223","type":"sequence"}]
 */
class SystemRoamingNetworkModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mscAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:15223
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $mscAddress = null;

    /**
     * @ElementName networkTranslationIndex
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15223
     * @MinLength 1
     * @MaxLength 128
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $networkTranslationIndex = null;

    /**
     * Getter for mscAddress
     *
     * @return string
     */
    public function getMscAddress()
    {
        return $this->mscAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mscAddress;
    }

    /**
     * Setter for mscAddress
     *
     * @param string $mscAddress
     * @return $this
     */
    public function setMscAddress($mscAddress)
    {
        $this->mscAddress = $mscAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMscAddress()
    {
        $this->mscAddress = null;
        return $this;
    }

    /**
     * Getter for networkTranslationIndex
     *
     * @return string|null
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @param string|null $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        if ($networkTranslationIndex === null) {
            $this->networkTranslationIndex = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkTranslationIndex = $networkTranslationIndex;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTranslationIndex()
    {
        $this->networkTranslationIndex = null;
        return $this;
    }
}

