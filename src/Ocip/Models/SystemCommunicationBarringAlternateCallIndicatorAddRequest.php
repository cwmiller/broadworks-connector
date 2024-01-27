<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringAlternateCallIndicatorAddRequest
 *
 * Add a Communication Barring Alternate Call Indicator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5616","type":"sequence"}]
 */
class SystemCommunicationBarringAlternateCallIndicatorAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5616
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $alternateCallIndicator = null;

    /**
     * @ElementName networkServerAlternateCallIndicator
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5616
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $networkServerAlternateCallIndicator = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @return string
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicator()
    {
        $this->alternateCallIndicator = null;
        return $this;
    }

    /**
     * Getter for networkServerAlternateCallIndicator
     *
     * @return string
     */
    public function getNetworkServerAlternateCallIndicator()
    {
        return $this->networkServerAlternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkServerAlternateCallIndicator;
    }

    /**
     * Setter for networkServerAlternateCallIndicator
     *
     * @param string $networkServerAlternateCallIndicator
     * @return $this
     */
    public function setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator)
    {
        $this->networkServerAlternateCallIndicator = $networkServerAlternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkServerAlternateCallIndicator()
    {
        $this->networkServerAlternateCallIndicator = null;
        return $this;
    }
}

