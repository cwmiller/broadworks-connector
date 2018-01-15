<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaDeleteRequest
 *
 * Request to delete a Media from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaName
     * @var string|null
     */
    private $mediaName = null;

    /**
     * Getter for mediaName
     *
     * @ElementName mediaName
     * @return string|null
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @ElementName mediaName
     * @param string|null $mediaName
     * @return $this
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }


}

