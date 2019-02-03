<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAddContentTypeRequest
 *
 * Add a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15368","type":"sequence"}]
 */
class SystemSIPAddContentTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName contentType
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15368
     * @var string|null
     */
    private $contentType = null;

    /**
     * @ElementName interface
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15368
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface|null
     */
    private $interface = null;

    /**
     * Getter for contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contentType;
    }

    /**
     * Setter for contentType
     *
     * @param string $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContentType()
    {
        $this->contentType = null;
        return $this;
    }

    /**
     * Getter for interface
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface
     */
    public function getInterface()
    {
        return $this->interface instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interface;
    }

    /**
     * Setter for interface
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface $interface
     * @return $this
     */
    public function setInterface(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface $interface)
    {
        $this->interface = $interface;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterface()
    {
        $this->interface = null;
        return $this;
    }


}

