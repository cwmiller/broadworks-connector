<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringAlternateCallIndicatorModifyRequest
 *
 * Modify a Communication Barring Alternate Call Indicator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringAlternateCallIndicatorModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName networkServerAlternateCallIndicator
     * @var string|null
     */
    private $networkServerAlternateCallIndicator = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string|null
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string|null $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * Getter for networkServerAlternateCallIndicator
     *
     * @ElementName networkServerAlternateCallIndicator
     * @return string|null
     */
    public function getNetworkServerAlternateCallIndicator()
    {
        return $this->networkServerAlternateCallIndicator;
    }

    /**
     * Setter for networkServerAlternateCallIndicator
     *
     * @ElementName networkServerAlternateCallIndicator
     * @param string|null $networkServerAlternateCallIndicator
     * @return $this
     */
    public function setNetworkServerAlternateCallIndicator($networkServerAlternateCallIndicator)
    {
        $this->networkServerAlternateCallIndicator = $networkServerAlternateCallIndicator;
        return $this;
    }


}

