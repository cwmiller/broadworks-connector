<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse
 *
 * Response to the GroupCallCenterGetAnnouncementRequest.
 *
 * @see GroupCallCenterGetAnnouncementRequest
 */
class GroupCallCenterGetAnnouncementResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName onHoldMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $onHoldMessageSelection = null;

    /**
     * @ElementName onHoldMessageAudioFileDescription
     * @var string|null
     */
    private $onHoldMessageAudioFileDescription = null;

    /**
     * @ElementName onHoldMessageVideoFileDescription
     * @var string|null
     */
    private $onHoldMessageVideoFileDescription = null;

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
     * Getter for onHoldMessageSelection
     *
     * @ElementName onHoldMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    public function getOnHoldMessageSelection()
    {
        return $this->onHoldMessageSelection;
    }

    /**
     * Setter for onHoldMessageSelection
     *
     * @ElementName onHoldMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null $onHoldMessageSelection
     * @return $this
     */
    public function setOnHoldMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $onHoldMessageSelection)
    {
        $this->onHoldMessageSelection = $onHoldMessageSelection;
        return $this;
    }

    /**
     * Getter for onHoldMessageAudioFileDescription
     *
     * @ElementName onHoldMessageAudioFileDescription
     * @return string|null
     */
    public function getOnHoldMessageAudioFileDescription()
    {
        return $this->onHoldMessageAudioFileDescription;
    }

    /**
     * Setter for onHoldMessageAudioFileDescription
     *
     * @ElementName onHoldMessageAudioFileDescription
     * @param string|null $onHoldMessageAudioFileDescription
     * @return $this
     */
    public function setOnHoldMessageAudioFileDescription($onHoldMessageAudioFileDescription)
    {
        $this->onHoldMessageAudioFileDescription = $onHoldMessageAudioFileDescription;
        return $this;
    }

    /**
     * Getter for onHoldMessageVideoFileDescription
     *
     * @ElementName onHoldMessageVideoFileDescription
     * @return string|null
     */
    public function getOnHoldMessageVideoFileDescription()
    {
        return $this->onHoldMessageVideoFileDescription;
    }

    /**
     * Setter for onHoldMessageVideoFileDescription
     *
     * @ElementName onHoldMessageVideoFileDescription
     * @param string|null $onHoldMessageVideoFileDescription
     * @return $this
     */
    public function setOnHoldMessageVideoFileDescription($onHoldMessageVideoFileDescription)
    {
        $this->onHoldMessageVideoFileDescription = $onHoldMessageVideoFileDescription;
        return $this;
    }


}

