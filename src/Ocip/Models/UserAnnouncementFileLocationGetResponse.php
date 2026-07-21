<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileLocationGetResponse
 *
 * Response to UserAnnouncementFileLocationGetRequest.
 *
 * @see UserAnnouncementFileLocationGetRequest
 * @Groups [{"id":"cee4eaafa48c4778c702750c877cb92d:35","type":"sequence"}]
 */
class UserAnnouncementFileLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName fileLocation
     * @Type string
     * @Group cee4eaafa48c4778c702750c877cb92d:35
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

