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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16985","type":"sequence"}]
 */
class SystemSIPDeleteContentTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName contentType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:16985
     * @MinLength 2
     * @MaxLength 80
     * @var string|null
     */
    protected $contentType = null;

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

