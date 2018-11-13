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
 */
class SystemCommunicationBarringAlternateCallIndicatorAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName networkServerAlternateCallIndicator
     * @Type string
     * @var string|null
     */
    private $networkServerAlternateCallIndicator = null;

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

