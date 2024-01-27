<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaResponse15sp2
 *
 * Response to the UserCustomRingbackUserGetCriteriaRequest15sp2.
 *         Replaced By: UserCustomRingbackUserAddCriteriaResponse16
 *
 * @see UserCustomRingbackUserGetCriteriaRequest15sp2
 * @see UserCustomRingbackUserAddCriteriaResponse16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:42725","type":"sequence"}]
 */
class UserCustomRingbackUserGetCriteriaResponse15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    protected $fromDnCriteria = null;

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioSelection = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileDescription = null;

    /**
     * @ElementName audioFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $audioFileUrl = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoSelection = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileDescription = null;

    /**
     * @ElementName videoFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $videoFileUrl = null;

    /**
     * @ElementName callWaitingAudioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $callWaitingAudioSelection = null;

    /**
     * @ElementName callWaitingAudioFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $callWaitingAudioFileDescription = null;

    /**
     * @ElementName callWaitingAudioFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $callWaitingAudioFileUrl = null;

    /**
     * @ElementName callWaitingVideoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $callWaitingVideoSelection = null;

    /**
     * @ElementName callWaitingVideoFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $callWaitingVideoFileDescription = null;

    /**
     * @ElementName callWaitingVideoFileUrl
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42725
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $callWaitingVideoFileUrl = null;

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
     * Getter for callWaitingAudioFileDescription
     *
     * @return string
     */
    public function getCallWaitingAudioFileDescription()
    {
        return $this->callWaitingAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingAudioFileDescription;
    }

    /**
     * Setter for callWaitingAudioFileDescription
     *
     * @param string $callWaitingAudioFileDescription
     * @return $this
     */
    public function setCallWaitingAudioFileDescription($callWaitingAudioFileDescription)
    {
        $this->callWaitingAudioFileDescription = $callWaitingAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingAudioFileDescription()
    {
        $this->callWaitingAudioFileDescription = null;
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
     * Getter for callWaitingVideoFileDescription
     *
     * @return string
     */
    public function getCallWaitingVideoFileDescription()
    {
        return $this->callWaitingVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callWaitingVideoFileDescription;
    }

    /**
     * Setter for callWaitingVideoFileDescription
     *
     * @param string $callWaitingVideoFileDescription
     * @return $this
     */
    public function setCallWaitingVideoFileDescription($callWaitingVideoFileDescription)
    {
        $this->callWaitingVideoFileDescription = $callWaitingVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallWaitingVideoFileDescription()
    {
        $this->callWaitingVideoFileDescription = null;
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

