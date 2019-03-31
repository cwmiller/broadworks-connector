<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaResponse21
 *
 * Response to the UserCustomRingbackUserGetCriteriaRequest21.
 *
 * @see UserCustomRingbackUserGetCriteriaRequest21
 * @Groups [{"id":"80acd3e6f38b9682dcefe7cd473392c3:218","type":"sequence"}]
 */
class UserCustomRingbackUserGetCriteriaResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName blacklisted
     * @Type bool
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var bool|null
     */
    private $blacklisted = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    private $fromDnCriteria = null;

    /**
     * @ElementName callToNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallToNumber
     * @Array
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    private $callToNumber = array(
        
    );

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $audioFile = null;

    /**
     * @ElementName audioFileUrl
     * @Type string
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $audioFileUrl = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $videoFile = null;

    /**
     * @ElementName videoFileUrl
     * @Type string
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $videoFileUrl = null;

    /**
     * @ElementName callWaitingAudioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $callWaitingAudioSelection = null;

    /**
     * @ElementName callWaitingAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $callWaitingAudioFile = null;

    /**
     * @ElementName callWaitingAudioFileUrl
     * @Type string
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $callWaitingAudioFileUrl = null;

    /**
     * @ElementName callWaitingVideoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $callWaitingVideoSelection = null;

    /**
     * @ElementName callWaitingVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $callWaitingVideoFile = null;

    /**
     * @ElementName callWaitingVideoFileUrl
     * @Type string
     * @Optional
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:218
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $callWaitingVideoFileUrl = null;

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for blacklisted
     *
     * @return bool
     */
    public function getBlacklisted()
    {
        return $this->blacklisted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blacklisted;
    }

    /**
     * Setter for blacklisted
     *
     * @param bool $blacklisted
     * @return $this
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlacklisted()
    {
        $this->blacklisted = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn $fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria()
    {
        $this->fromDnCriteria = null;
        return $this;
    }

    /**
     * Getter for callToNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    public function getCallToNumber()
    {
        return $this->callToNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callToNumber;
    }

    /**
     * Setter for callToNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[] $callToNumber
     * @return $this
     */
    public function setCallToNumber(array $callToNumber)
    {
        $this->callToNumber = $callToNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallToNumber()
    {
        $this->callToNumber = null;
        return $this;
    }

    /**
     * Adder for callToNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber $callToNumber
     * @return $this
     */
    public function addCallToNumber($callToNumber)
    {
        $this->callToNumber[] = $callToNumber;
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
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFile()
    {
        $this->audioFile = null;
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
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFile()
    {
        $this->videoFile = null;
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

    /**
     * Getter for callWaitingAudioSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getCallWaitingAudioSelection()
    {
        return $this->callWaitingAudioSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAudioSelection;
    }

    /**
     * Setter for callWaitingAudioSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingAudioSelection
     * @return $this
     */
    public function setCallWaitingAudioSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingAudioSelection)
    {
        $this->callWaitingAudioSelection = $callWaitingAudioSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAudioSelection()
    {
        $this->callWaitingAudioSelection = null;
        return $this;
    }

    /**
     * Getter for callWaitingAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getCallWaitingAudioFile()
    {
        return $this->callWaitingAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAudioFile;
    }

    /**
     * Setter for callWaitingAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $callWaitingAudioFile
     * @return $this
     */
    public function setCallWaitingAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $callWaitingAudioFile)
    {
        $this->callWaitingAudioFile = $callWaitingAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAudioFile()
    {
        $this->callWaitingAudioFile = null;
        return $this;
    }

    /**
     * Getter for callWaitingAudioFileUrl
     *
     * @return string
     */
    public function getCallWaitingAudioFileUrl()
    {
        return $this->callWaitingAudioFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAudioFileUrl;
    }

    /**
     * Setter for callWaitingAudioFileUrl
     *
     * @param string $callWaitingAudioFileUrl
     * @return $this
     */
    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl)
    {
        $this->callWaitingAudioFileUrl = $callWaitingAudioFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAudioFileUrl()
    {
        $this->callWaitingAudioFileUrl = null;
        return $this;
    }

    /**
     * Getter for callWaitingVideoSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getCallWaitingVideoSelection()
    {
        return $this->callWaitingVideoSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingVideoSelection;
    }

    /**
     * Setter for callWaitingVideoSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingVideoSelection
     * @return $this
     */
    public function setCallWaitingVideoSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $callWaitingVideoSelection)
    {
        $this->callWaitingVideoSelection = $callWaitingVideoSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingVideoSelection()
    {
        $this->callWaitingVideoSelection = null;
        return $this;
    }

    /**
     * Getter for callWaitingVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getCallWaitingVideoFile()
    {
        return $this->callWaitingVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingVideoFile;
    }

    /**
     * Setter for callWaitingVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $callWaitingVideoFile
     * @return $this
     */
    public function setCallWaitingVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $callWaitingVideoFile)
    {
        $this->callWaitingVideoFile = $callWaitingVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingVideoFile()
    {
        $this->callWaitingVideoFile = null;
        return $this;
    }

    /**
     * Getter for callWaitingVideoFileUrl
     *
     * @return string
     */
    public function getCallWaitingVideoFileUrl()
    {
        return $this->callWaitingVideoFileUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingVideoFileUrl;
    }

    /**
     * Setter for callWaitingVideoFileUrl
     *
     * @param string $callWaitingVideoFileUrl
     * @return $this
     */
    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl)
    {
        $this->callWaitingVideoFileUrl = $callWaitingVideoFileUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingVideoFileUrl()
    {
        $this->callWaitingVideoFileUrl = null;
        return $this;
    }


}

