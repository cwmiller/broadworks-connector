<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationResponse
 *
 * Response to the SystemSecurityClassificationGetClassificationRequest.
 *
 * @see SystemSecurityClassificationGetClassificationRequest
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getAudioAnnouncementFileType()
    {
        return $this->audioAnnouncementFileType;
    }

    /**
     * Setter for audioAnnouncementFileType
     *
     * @ElementName audioAnnouncementFileType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $audioAnnouncementFileType
     * @return $this
     */
    public function setAudioAnnouncementFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioAnnouncementFileType)
    {
        $this->audioAnnouncementFileType = $audioAnnouncementFileType;
        return $this;
    }


}

