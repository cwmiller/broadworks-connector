<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePreAlertingAnnouncementGetResponse
 *
 * Get the Enterprise level pre-alerting service settings.
 *         The response is either a EnterprisePreAlertingAnnouncementGetResponse or an ErrorResponse.
 *
 * @see EnterprisePreAlertingAnnouncementGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"6165f2b4cd549de71fe8f3171488fdd8:67","type":"sequence"}]
 */
class EnterprisePreAlertingAnnouncementGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementInterruption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt|null
     */
    private $announcementInterruption = null;

    /**
     * @ElementName interruptionDigitSequence
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $interruptionDigitSequence = null;

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName audioFileUrl
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $audioFileUrl = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $videoMediaType = null;

    /**
     * @ElementName videoFileUrl
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:67
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $videoFileUrl = null;

    /**
     * Getter for announcementInterruption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt
     */
    public function getAnnouncementInterruption()
    {
        return $this->announcementInterruption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementInterruption;
    }

    /**
     * Setter for announcementInterruption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption
     * @return $this
     */
    public function setAnnouncementInterruption(\CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption)
    {
        $this->announcementInterruption = $announcementInterruption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementInterruption()
    {
        $this->announcementInterruption = null;
        return $this;
    }

    /**
     * Getter for interruptionDigitSequence
     *
     * @return string
     */
    public function getInterruptionDigitSequence()
    {
        return $this->interruptionDigitSequence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interruptionDigitSequence;
    }

    /**
     * Setter for interruptionDigitSequence
     *
     * @param string $interruptionDigitSequence
     * @return $this
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence)
    {
        $this->interruptionDigitSequence = $interruptionDigitSequence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterruptionDigitSequence()
    {
        $this->interruptionDigitSequence = null;
        return $this;
    }

    /**
     * Getter for audioSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getAudioSelection()
    {
        return $this->audioSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioSelection;
    }

    /**
     * Setter for audioSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection
     * @return $this
     */
    public function setAudioSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection)
    {
        $this->audioSelection = $audioSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioSelection()
    {
        $this->audioSelection = null;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @return string
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @param string $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileDescription()
    {
        $this->audioFileDescription = null;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType
     * @return $this
     */
    public function setAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMediaType()
    {
        $this->audioMediaType = null;
        return $this;
    }

    /**
     * Getter for audioFileUrl
     *
     * @return string
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @param string $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileUrl()
    {
        $this->audioFileUrl = null;
        return $this;
    }

    /**
     * Getter for videoSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getVideoSelection()
    {
        return $this->videoSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoSelection;
    }

    /**
     * Setter for videoSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection
     * @return $this
     */
    public function setVideoSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection)
    {
        $this->videoSelection = $videoSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoSelection()
    {
        $this->videoSelection = null;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @return string
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @param string $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileDescription()
    {
        $this->videoFileDescription = null;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType
     * @return $this
     */
    public function setVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMediaType()
    {
        $this->videoMediaType = null;
        return $this;
    }

    /**
     * Getter for videoFileUrl
     *
     * @return string
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @param string $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileUrl()
    {
        $this->videoFileUrl = null;
        return $this;
    }


}

