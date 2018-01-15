<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationResponse
 *
 * Response to the SystemSecurityClassificationGetClassificationRequest.
 */
class SystemSecurityClassificationGetClassificationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName audioAnnouncementFileDescription
     * @var string|null
     */
    private $audioAnnouncementFileDescription = null;

    /**
     * @ElementName audioAnnouncementFileType
     * @var string|null
     */
    private $audioAnnouncementFileType = null;

    /**
     * Getter for audioAnnouncementFileDescription
     *
     * @ElementName audioAnnouncementFileDescription
     * @return string|null
     */
    public function getAudioAnnouncementFileDescription()
    {
        return $this->audioAnnouncementFileDescription;
    }

    /**
     * Setter for audioAnnouncementFileDescription
     *
     * @ElementName audioAnnouncementFileDescription
     * @param string|null $audioAnnouncementFileDescription
     * @return $this
     */
    public function setAudioAnnouncementFileDescription($audioAnnouncementFileDescription)
    {
        $this->audioAnnouncementFileDescription = $audioAnnouncementFileDescription;
        return $this;
    }

    /**
     * Getter for audioAnnouncementFileType
     *
     * @ElementName audioAnnouncementFileType
     * @return string|null
     */
    public function getAudioAnnouncementFileType()
    {
        return $this->audioAnnouncementFileType;
    }

    /**
     * Setter for audioAnnouncementFileType
     *
     * @ElementName audioAnnouncementFileType
     * @param string|null $audioAnnouncementFileType
     * @return $this
     */
    public function setAudioAnnouncementFileType($audioAnnouncementFileType)
    {
        $this->audioAnnouncementFileType = $audioAnnouncementFileType;
        return $this;
    }


}

