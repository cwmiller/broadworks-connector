<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationResponse
 *
 * Response to the SystemSecurityClassificationGetClassificationRequest.
 *
 * @see SystemSecurityClassificationGetClassificationRequest
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:150","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName audioAnnouncementFileDescription
     * @Type string
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:150
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioAnnouncementFileDescription = null;

    /**
     * @ElementName audioAnnouncementFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:150
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $audioAnnouncementFileType = null;

    /**
     * Getter for audioAnnouncementFileDescription
     *
     * @return string
     */
    public function getAudioAnnouncementFileDescription()
    {
        return $this->audioAnnouncementFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioAnnouncementFileDescription;
    }

    /**
     * Setter for audioAnnouncementFileDescription
     *
     * @param string $audioAnnouncementFileDescription
     * @return $this
     */
    public function setAudioAnnouncementFileDescription($audioAnnouncementFileDescription)
    {
        $this->audioAnnouncementFileDescription = $audioAnnouncementFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioAnnouncementFileDescription()
    {
        $this->audioAnnouncementFileDescription = null;
        return $this;
    }

    /**
     * Getter for audioAnnouncementFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioAnnouncementFileType()
    {
        return $this->audioAnnouncementFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioAnnouncementFileType;
    }

    /**
     * Setter for audioAnnouncementFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioAnnouncementFileType
     * @return $this
     */
    public function setAudioAnnouncementFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioAnnouncementFileType)
    {
        $this->audioAnnouncementFileType = $audioAnnouncementFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioAnnouncementFileType()
    {
        $this->audioAnnouncementFileType = null;
        return $this;
    }


}

