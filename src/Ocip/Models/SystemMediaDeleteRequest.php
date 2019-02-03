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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10619","type":"sequence"}]
 */
class SystemMediaDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10619
     * @var string|null
     */
    private $mediaName = null;

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

