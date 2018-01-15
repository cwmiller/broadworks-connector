<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPModifyContentTypeRequest
 *
 * Modify an content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPModifyContentTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName contentType
     * @var string|null
     */
    private $contentType = null;

    /**
     * @ElementName interface
     * @var string|null
     */
    private $interface = null;

    /**
     * Getter for contentType
     *
     * @ElementName contentType
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Setter for contentType
     *
     * @ElementName contentType
     * @param string|null $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Getter for interface
     *
     * @ElementName interface
     * @return string|null
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Setter for interface
     *
     * @ElementName interface
     * @param string|null $interface
     * @return $this
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;
        return $this;
    }


}

