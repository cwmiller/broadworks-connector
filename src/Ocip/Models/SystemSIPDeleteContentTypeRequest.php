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
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:14759","type":"sequence"}]
 */
class SystemSIPDeleteContentTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName contentType
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:14759
     * @var string|null
     */
    private $contentType = null;

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


}

