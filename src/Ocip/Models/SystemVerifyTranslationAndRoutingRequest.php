<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVerifyTranslationAndRoutingRequest
 *
 * Represents a Verify Translation and Routing request which can be either a request containing
 *         parameters or a request containing a SIP message. Returns a SystemVerifyTranslationAndRoutingResponse.
 *
 * @see SystemVerifyTranslationAndRoutingResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19104","type":"choice"}]
 */
class SystemVerifyTranslationAndRoutingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName parameters
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19104
     * @var \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters|null
     */
    private $parameters = null;

    /**
     * @ElementName sipMessage
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19104
     * @var string|null
     */
    private $sipMessage = null;

    /**
     * Getter for parameters
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters
     */
    public function getParameters()
    {
        return $this->parameters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->parameters;
    }

    /**
     * Setter for parameters
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters $parameters
     * @return $this
     */
    public function setParameters(\CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingParameters $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetParameters()
    {
        $this->parameters = null;
        return $this;
    }

    /**
     * Getter for sipMessage
     *
     * @return string
     */
    public function getSipMessage()
    {
        return $this->sipMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipMessage;
    }

    /**
     * Setter for sipMessage
     *
     * @param string $sipMessage
     * @return $this
     */
    public function setSipMessage($sipMessage)
    {
        $this->sipMessage = $sipMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipMessage()
    {
        $this->sipMessage = null;
        return $this;
    }


}

