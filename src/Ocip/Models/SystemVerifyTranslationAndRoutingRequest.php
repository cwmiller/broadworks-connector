<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVerifyTranslationAndRoutingRequest
 *
 * Represents a Verify Translation and Routing request which can be either a
 * request containing
 *         parameters or a request containing a SIP message. Returns a
 * SystemVerifyTranslationAndRoutingResponse.
 *
 * @see SystemVerifyTranslationAndRoutingResponse
 */
class SystemVerifyTranslationAndRoutingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName parameters
     * @var \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters|null
     */
    private $parameters = null;

    /**
     * @ElementName sipMessage
     * @var string|null
     */
    private $sipMessage = null;

    /**
     * Getter for parameters
     *
     * @ElementName parameters
     * @return \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Setter for parameters
     *
     * @ElementName parameters
     * @param \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters|null $parameters
     * @return $this
     */
    public function setParameters(\CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Getter for sipMessage
     *
     * @ElementName sipMessage
     * @return string|null
     */
    public function getSipMessage()
    {
        return $this->sipMessage;
    }

    /**
     * Setter for sipMessage
     *
     * @ElementName sipMessage
     * @param string|null $sipMessage
     * @return $this
     */
    public function setSipMessage($sipMessage)
    {
        $this->sipMessage = $sipMessage;
        return $this;
    }


}

