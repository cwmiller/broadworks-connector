<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse14sp6
 *
 * Response to the GroupCallCenterGetAnnouncementRequest14sp6.
 *
 * @see GroupCallCenterGetAnnouncementRequest14sp6
 */
class GroupCallCenterGetAnnouncementResponse14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entranceMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $entranceMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFileDescription
     * @var string|null
     */
    private $entranceMessageAudioFileDescription = null;

    /**
     * @ElementName entranceMessageVideoFileDescription
     * @var string|null
     */
    private $entranceMessageVideoFileDescription = null;

    /**
     * @ElementName periodicComfortMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $periodicComfortMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFileDescription
     * @var string|null
     */
    private $periodicComfortMessageAudioFileDescription = null;

    /**
     * @ElementName periodicComfortMessageVideoFileDescription
     * @var string|null
     */
    private $periodicComfortMessageVideoFileDescription = null;

    /**
     * @ElementName onHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null
     */
    private $onHoldSource = null;

    /**
     * @ElementName onHoldUseAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $onHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName onHoldInternalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null
     */
    private $onHoldInternalSource = null;

    /**
     * Getter for entranceMessageSelection
     *
     * @ElementName entranceMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    public function getEntranceMessageSelection()
    {
        return $this->entranceMessageSelection;
    }

    /**
     * Setter for entranceMessageSelection
     *
     * @ElementName entranceMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null $entranceMessageSelection
     * @return $this
     */
    public function setEntranceMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $entranceMessageSelection)
    {
        $this->entranceMessageSelection = $entranceMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileDescription
     *
     * @ElementName entranceMessageAudioFileDescription
     * @return string|null
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return $this->entranceMessageAudioFileDescription;
    }

    /**
     * Setter for entranceMessageAudioFileDescription
     *
     * @ElementName entranceMessageAudioFileDescription
     * @param string|null $entranceMessageAudioFileDescription
     * @return $this
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription)
    {
        $this->entranceMessageAudioFileDescription = $entranceMessageAudioFileDescription;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileDescription
     *
     * @ElementName entranceMessageVideoFileDescription
     * @return string|null
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return $this->entranceMessageVideoFileDescription;
    }

    /**
     * Setter for entranceMessageVideoFileDescription
     *
     * @ElementName entranceMessageVideoFileDescription
     * @param string|null $entranceMessageVideoFileDescription
     * @return $this
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription)
    {
        $this->entranceMessageVideoFileDescription = $entranceMessageVideoFileDescription;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageSelection
     *
     * @ElementName periodicComfortMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    public function getPeriodicComfortMessageSelection()
    {
        return $this->periodicComfortMessageSelection;
    }

    /**
     * Setter for periodicComfortMessageSelection
     *
     * @ElementName periodicComfortMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null $periodicComfortMessageSelection
     * @return $this
     */
    public function setPeriodicComfortMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $periodicComfortMessageSelection)
    {
        $this->periodicComfortMessageSelection = $periodicComfortMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileDescription
     *
     * @ElementName periodicComfortMessageAudioFileDescription
     * @return string|null
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return $this->periodicComfortMessageAudioFileDescription;
    }

    /**
     * Setter for periodicComfortMessageAudioFileDescription
     *
     * @ElementName periodicComfortMessageAudioFileDescription
     * @param string|null $periodicComfortMessageAudioFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription)
    {
        $this->periodicComfortMessageAudioFileDescription = $periodicComfortMessageAudioFileDescription;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileDescription
     *
     * @ElementName periodicComfortMessageVideoFileDescription
     * @return string|null
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return $this->periodicComfortMessageVideoFileDescription;
    }

    /**
     * Setter for periodicComfortMessageVideoFileDescription
     *
     * @ElementName periodicComfortMessageVideoFileDescription
     * @param string|null $periodicComfortMessageVideoFileDescription
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription)
    {
        $this->periodicComfortMessageVideoFileDescription = $periodicComfortMessageVideoFileDescription;
        return $this;
    }

    /**
     * Getter for onHoldSource
     *
     * @ElementName onHoldSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null
     */
    public function getOnHoldSource()
    {
        return $this->onHoldSource;
    }

    /**
     * Setter for onHoldSource
     *
     * @ElementName onHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null $onHoldSource
     * @return $this
     */
    public function setOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead $onHoldSource)
    {
        $this->onHoldSource = $onHoldSource;
        return $this;
    }

    /**
     * Getter for onHoldUseAlternateSourceForInternalCalls
     *
     * @ElementName onHoldUseAlternateSourceForInternalCalls
     * @return bool|null
     */
    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->onHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * Setter for onHoldUseAlternateSourceForInternalCalls
     *
     * @ElementName onHoldUseAlternateSourceForInternalCalls
     * @param bool|null $onHoldUseAlternateSourceForInternalCalls
     * @return $this
     */
    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls)
    {
        $this->onHoldUseAlternateSourceForInternalCalls = $onHoldUseAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * Getter for onHoldInternalSource
     *
     * @ElementName onHoldInternalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null
     */
    public function getOnHoldInternalSource()
    {
        return $this->onHoldInternalSource;
    }

    /**
     * Setter for onHoldInternalSource
     *
     * @ElementName onHoldInternalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead|null $onHoldInternalSource
     * @return $this
     */
    public function setOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceRead $onHoldInternalSource)
    {
        $this->onHoldInternalSource = $onHoldInternalSource;
        return $this;
    }


}

