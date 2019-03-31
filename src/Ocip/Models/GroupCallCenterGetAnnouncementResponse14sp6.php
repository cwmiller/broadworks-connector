<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse14sp6
 *
 * Response to the GroupCallCenterGetAnnouncementRequest14sp6.
 *
 * @see GroupCallCenterGetAnnouncementRequest14sp6
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:8361","type":"sequence"}]
 */
class GroupCallCenterGetAnnouncementResponse14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entranceMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $entranceMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $entranceMessageAudioFileDescription = null;

    /**
     * @ElementName entranceMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $entranceMessageVideoFileDescription = null;

    /**
     * @ElementName periodicComfortMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $periodicComfortMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $periodicComfortMessageAudioFileDescription = null;

    /**
     * @ElementName periodicComfortMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $periodicComfortMessageVideoFileDescription = null;

    /**
     * @ElementName onHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null
     */
    private $onHoldSource = null;

    /**
     * @ElementName onHoldUseAlternateSourceForInternalCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @var bool|null
     */
    private $onHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName onHoldInternalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8361
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null
     */
    private $onHoldInternalSource = null;

    /**
     * Getter for entranceMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     */
    public function getEntranceMessageSelection()
    {
        return $this->entranceMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageSelection;
    }

    /**
     * Setter for entranceMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $entranceMessageSelection
     * @return $this
     */
    public function setEntranceMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $entranceMessageSelection)
    {
        $this->entranceMessageSelection = $entranceMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageSelection()
    {
        $this->entranceMessageSelection = null;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileDescription
     *
     * @return string
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return $this->entranceMessageAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioFileDescription;
    }

    /**
     * Setter for entranceMessageAudioFileDescription
     *
     * @param string $entranceMessageAudioFileDescription
     * @return $this
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription)
    {
        $this->entranceMessageAudioFileDescription = $entranceMessageAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioFileDescription()
    {
        $this->entranceMessageAudioFileDescription = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileDescription
     *
     * @return string
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return $this->entranceMessageVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoFileDescription;
    }

    /**
     * Setter for entranceMessageVideoFileDescription
     *
     * @param string $entranceMessageVideoFileDescription
     * @return $this
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription)
    {
        $this->entranceMessageVideoFileDescription = $entranceMessageVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoFileDescription()
    {
        $this->entranceMessageVideoFileDescription = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return $this->periodicComfortMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageSelection;
    }

    /**
     * Setter for periodicComfortMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $periodicComfortMessageSelection
     * @return $this
     */
    public function setPeriodicComfortMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $periodicComfortMessageSelection)
    {
        $this->periodicComfortMessageSelection = $periodicComfortMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageSelection()
    {
        $this->periodicComfortMessageSelection = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileDescription
     *
     * @return string
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return $this->periodicComfortMessageAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioFileDescription;
    }

    /**
     * Setter for periodicComfortMessageAudioFileDescription
     *
     * @param string $periodicComfortMessageAudioFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription)
    {
        $this->periodicComfortMessageAudioFileDescription = $periodicComfortMessageAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioFileDescription()
    {
        $this->periodicComfortMessageAudioFileDescription = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileDescription
     *
     * @return string
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return $this->periodicComfortMessageVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoFileDescription;
    }

    /**
     * Setter for periodicComfortMessageVideoFileDescription
     *
     * @param string $periodicComfortMessageVideoFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription)
    {
        $this->periodicComfortMessageVideoFileDescription = $periodicComfortMessageVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoFileDescription()
    {
        $this->periodicComfortMessageVideoFileDescription = null;
        return $this;
    }

    /**
     * Getter for onHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead
     */
    public function getOnHoldSource()
    {
        return $this->onHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldSource;
    }

    /**
     * Setter for onHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead $onHoldSource
     * @return $this
     */
    public function setOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead $onHoldSource)
    {
        $this->onHoldSource = $onHoldSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldSource()
    {
        $this->onHoldSource = null;
        return $this;
    }

    /**
     * Getter for onHoldUseAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->onHoldUseAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * Setter for onHoldUseAlternateSourceForInternalCalls
     *
     * @param bool $onHoldUseAlternateSourceForInternalCalls
     * @return $this
     */
    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls)
    {
        $this->onHoldUseAlternateSourceForInternalCalls = $onHoldUseAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldUseAlternateSourceForInternalCalls()
    {
        $this->onHoldUseAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for onHoldInternalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead
     */
    public function getOnHoldInternalSource()
    {
        return $this->onHoldInternalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldInternalSource;
    }

    /**
     * Setter for onHoldInternalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead $onHoldInternalSource
     * @return $this
     */
    public function setOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead $onHoldInternalSource)
    {
        $this->onHoldInternalSource = $onHoldInternalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldInternalSource()
    {
        $this->onHoldInternalSource = null;
        return $this;
    }


}

