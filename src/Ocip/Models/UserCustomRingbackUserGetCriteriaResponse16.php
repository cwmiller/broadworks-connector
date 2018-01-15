<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaResponse16
 *
 * Response to the UserCustomRingbackUserGetCriteriaRequest16.
 */
class UserCustomRingbackUserGetCriteriaResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName blacklisted
     * @var bool|null
     */
    private $blacklisted = null;

    /**
     * @ElementName fromDnCriteria
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    private $fromDnCriteria = null;

    /**
     * @ElementName audioSelection
     * @var string|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @var string|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName audioFileUrl
     * @var string|null
     */
    private $audioFileUrl = null;

    /**
     * @ElementName videoSelection
     * @var string|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @var string|null
     */
    private $videoMediaType = null;

    /**
     * @ElementName videoFileUrl
     * @var string|null
     */
    private $videoFileUrl = null;

    /**
     * @ElementName callWaitingAudioSelection
     * @var string|null
     */
    private $callWaitingAudioSelection = null;

    /**
     * @ElementName callWaitingAudioFileDescription
     * @var string|null
     */
    private $callWaitingAudioFileDescription = null;

    /**
     * @ElementName callWaitingAudioMediaType
     * @var string|null
     */
    private $callWaitingAudioMediaType = null;

    /**
     * @ElementName callWaitingAudioFileUrl
     * @var string|null
     */
    private $callWaitingAudioFileUrl = null;

    /**
     * @ElementName callWaitingVideoSelection
     * @var string|null
     */
    private $callWaitingVideoSelection = null;

    /**
     * @ElementName callWaitingVideoFileDescription
     * @var string|null
     */
    private $callWaitingVideoFileDescription = null;

    /**
     * @ElementName callWaitingVideoMediaType
     * @var string|null
     */
    private $callWaitingVideoMediaType = null;

    /**
     * @ElementName callWaitingVideoFileUrl
     * @var string|null
     */
    private $callWaitingVideoFileUrl = null;

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for blacklisted
     *
     * @ElementName blacklisted
     * @return bool|null
     */
    public function getBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * Setter for blacklisted
     *
     * @ElementName blacklisted
     * @param bool|null $blacklisted
     * @return $this
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @ElementName fromDnCriteria
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria($fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * Getter for audioSelection
     *
     * @ElementName audioSelection
     * @return string|null
     */
    public function getAudioSelection()
    {
        return $this->audioSelection;
    }

    /**
     * Setter for audioSelection
     *
     * @ElementName audioSelection
     * @param string|null $audioSelection
     * @return $this
     */
    public function setAudioSelection($audioSelection)
    {
        $this->audioSelection = $audioSelection;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @return string|null
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @param string|null $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @ElementName audioMediaType
     * @return string|null
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @ElementName audioMediaType
     * @param string|null $audioMediaType
     * @return $this
     */
    public function setAudioMediaType($audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * Getter for audioFileUrl
     *
     * @ElementName audioFileUrl
     * @return string|null
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl;
    }

    /**
     * Setter for audioFileUrl
     *
     * @ElementName audioFileUrl
     * @param string|null $audioFileUrl
     * @return $this
     */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->audioFileUrl = $audioFileUrl;
        return $this;
    }

    /**
     * Getter for videoSelection
     *
     * @ElementName videoSelection
     * @return string|null
     */
    public function getVideoSelection()
    {
        return $this->videoSelection;
    }

    /**
     * Setter for videoSelection
     *
     * @ElementName videoSelection
     * @param string|null $videoSelection
     * @return $this
     */
    public function setVideoSelection($videoSelection)
    {
        $this->videoSelection = $videoSelection;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @return string|null
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @param string|null $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @ElementName videoMediaType
     * @return string|null
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @ElementName videoMediaType
     * @param string|null $videoMediaType
     * @return $this
     */
    public function setVideoMediaType($videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * Getter for videoFileUrl
     *
     * @ElementName videoFileUrl
     * @return string|null
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl;
    }

    /**
     * Setter for videoFileUrl
     *
     * @ElementName videoFileUrl
     * @param string|null $videoFileUrl
     * @return $this
     */
    public function setVideoFileUrl($videoFileUrl)
    {
        $this->videoFileUrl = $videoFileUrl;
        return $this;
    }

    /**
     * Getter for callWaitingAudioSelection
     *
     * @ElementName callWaitingAudioSelection
     * @return string|null
     */
    public function getCallWaitingAudioSelection()
    {
        return $this->callWaitingAudioSelection;
    }

    /**
     * Setter for callWaitingAudioSelection
     *
     * @ElementName callWaitingAudioSelection
     * @param string|null $callWaitingAudioSelection
     * @return $this
     */
    public function setCallWaitingAudioSelection($callWaitingAudioSelection)
    {
        $this->callWaitingAudioSelection = $callWaitingAudioSelection;
        return $this;
    }

    /**
     * Getter for callWaitingAudioFileDescription
     *
     * @ElementName callWaitingAudioFileDescription
     * @return string|null
     */
    public function getCallWaitingAudioFileDescription()
    {
        return $this->callWaitingAudioFileDescription;
    }

    /**
     * Setter for callWaitingAudioFileDescription
     *
     * @ElementName callWaitingAudioFileDescription
     * @param string|null $callWaitingAudioFileDescription
     * @return $this
     */
    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription)
    {
        $this->callWaitingAudioFileDescription = $callWaitingAudioFileDescription;
        return $this;
    }

    /**
     * Getter for callWaitingAudioMediaType
     *
     * @ElementName callWaitingAudioMediaType
     * @return string|null
     */
    public function getCallWaitingAudioMediaType()
    {
        return $this->callWaitingAudioMediaType;
    }

    /**
     * Setter for callWaitingAudioMediaType
     *
     * @ElementName callWaitingAudioMediaType
     * @param string|null $callWaitingAudioMediaType
     * @return $this
     */
    public function setCallWaitingAudioMediaType($callWaitingAudioMediaType)
    {
        $this->callWaitingAudioMediaType = $callWaitingAudioMediaType;
        return $this;
    }

    /**
     * Getter for callWaitingAudioFileUrl
     *
     * @ElementName callWaitingAudioFileUrl
     * @return string|null
     */
    public function getCallWaitingAudioFileUrl()
    {
        return $this->callWaitingAudioFileUrl;
    }

    /**
     * Setter for callWaitingAudioFileUrl
     *
     * @ElementName callWaitingAudioFileUrl
     * @param string|null $callWaitingAudioFileUrl
     * @return $this
     */
    public function setCallWaitingAudioFileUrl($callWaitingAudioFileUrl)
    {
        $this->callWaitingAudioFileUrl = $callWaitingAudioFileUrl;
        return $this;
    }

    /**
     * Getter for callWaitingVideoSelection
     *
     * @ElementName callWaitingVideoSelection
     * @return string|null
     */
    public function getCallWaitingVideoSelection()
    {
        return $this->callWaitingVideoSelection;
    }

    /**
     * Setter for callWaitingVideoSelection
     *
     * @ElementName callWaitingVideoSelection
     * @param string|null $callWaitingVideoSelection
     * @return $this
     */
    public function setCallWaitingVideoSelection($callWaitingVideoSelection)
    {
        $this->callWaitingVideoSelection = $callWaitingVideoSelection;
        return $this;
    }

    /**
     * Getter for callWaitingVideoFileDescription
     *
     * @ElementName callWaitingVideoFileDescription
     * @return string|null
     */
    public function getCallWaitingVideoFileDescription()
    {
        return $this->callWaitingVideoFileDescription;
    }

    /**
     * Setter for callWaitingVideoFileDescription
     *
     * @ElementName callWaitingVideoFileDescription
     * @param string|null $callWaitingVideoFileDescription
     * @return $this
     */
    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription)
    {
        $this->callWaitingVideoFileDescription = $callWaitingVideoFileDescription;
        return $this;
    }

    /**
     * Getter for callWaitingVideoMediaType
     *
     * @ElementName callWaitingVideoMediaType
     * @return string|null
     */
    public function getCallWaitingVideoMediaType()
    {
        return $this->callWaitingVideoMediaType;
    }

    /**
     * Setter for callWaitingVideoMediaType
     *
     * @ElementName callWaitingVideoMediaType
     * @param string|null $callWaitingVideoMediaType
     * @return $this
     */
    public function setCallWaitingVideoMediaType($callWaitingVideoMediaType)
    {
        $this->callWaitingVideoMediaType = $callWaitingVideoMediaType;
        return $this;
    }

    /**
     * Getter for callWaitingVideoFileUrl
     *
     * @ElementName callWaitingVideoFileUrl
     * @return string|null
     */
    public function getCallWaitingVideoFileUrl()
    {
        return $this->callWaitingVideoFileUrl;
    }

    /**
     * Setter for callWaitingVideoFileUrl
     *
     * @ElementName callWaitingVideoFileUrl
     * @param string|null $callWaitingVideoFileUrl
     * @return $this
     */
    public function setCallWaitingVideoFileUrl($callWaitingVideoFileUrl)
    {
        $this->callWaitingVideoFileUrl = $callWaitingVideoFileUrl;
        return $this;
    }


}

