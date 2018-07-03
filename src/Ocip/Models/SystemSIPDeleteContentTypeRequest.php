<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeleteContentTypeRequest
 *
 * Delete a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSIPDeleteContentTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName contentType
     * @var string|null
     */
    private $contentType = null;

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


}

