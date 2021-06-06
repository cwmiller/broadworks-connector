<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileLocationGetResponse
 *
 * Response to UserAnnouncementFileLocationGetRequest.
 *
 * @see UserAnnouncementFileLocationGetRequest
 * @Groups [{"id":"0729212f68d12c248c92a1b3b3aa84d6:35","type":"sequence"}]
 */
class UserAnnouncementFileLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileLocation
     * @Type string
     * @Group 0729212f68d12c248c92a1b3b3aa84d6:35
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $fileLocation = null;

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

