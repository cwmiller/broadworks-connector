<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaDeleteRequest
 *
 * Request to delete a Media from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11782","type":"sequence"}]
 */
class SystemMediaDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mediaName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11782
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mediaName = null;

    /**
     * Getter for mediaName
     *
     * @return string
     */
    public function getMediaName()
    {
        return $this->mediaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @param string $mediaName
     * @return $this
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaName()
    {
        $this->mediaName = null;
        return $this;
    }
}

