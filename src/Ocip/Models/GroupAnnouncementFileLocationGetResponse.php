<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileLocationGetResponse
 *
 * Response to GroupAnnouncementFileLocationGetRequest.
 *
 * @see GroupAnnouncementFileLocationGetRequest
 * @Groups [{"id":"0729212f68d12c248c92a1b3b3aa84d6:69","type":"sequence"}]
 */
class GroupAnnouncementFileLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileLocation
     * @Type string
     * @Group 0729212f68d12c248c92a1b3b3aa84d6:69
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $fileLocation = null;

    /**
     * Getter for fileLocation
     *
     * @return string
     */
    public function getFileLocation()
    {
        return $this->fileLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileLocation;
    }

    /**
     * Setter for fileLocation
     *
     * @param string $fileLocation
     * @return $this
     */
    public function setFileLocation($fileLocation)
    {
        $this->fileLocation = $fileLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileLocation()
    {
        $this->fileLocation = null;
        return $this;
    }


}

