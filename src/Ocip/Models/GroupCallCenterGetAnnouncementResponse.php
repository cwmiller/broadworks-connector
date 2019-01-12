<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAnnouncementResponse
 *
 * Response to the GroupCallCenterGetAnnouncementRequest.
 *
 * @see GroupCallCenterGetAnnouncementRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:853","type":"sequence"}]
 */
class GroupCallCenterGetAnnouncementResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entranceMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $entranceMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var string|null
     */
    private $entranceMessageAudioFileDescription = null;

    /**
     * @ElementName entranceMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var string|null
     */
    private $entranceMessageVideoFileDescription = null;

    /**
     * @ElementName periodicComfortMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $periodicComfortMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var string|null
     */
    private $periodicComfortMessageAudioFileDescription = null;

    /**
     * @ElementName periodicComfortMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var string|null
     */
    private $periodicComfortMessageVideoFileDescription = null;

    /**
     * @ElementName onHoldMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $onHoldMessageSelection = null;

    /**
     * @ElementName onHoldMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var string|null
     */
    private $onHoldMessageAudioFileDescription = null;

    /**
     * @ElementName onHoldMessageVideoFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:853
     * @var string|null
     */
    private $onHoldMessageVideoFileDescription = null;

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
     * Getter for onHoldMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     */
    public function getOnHoldMessageSelection()
    {
        return $this->onHoldMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldMessageSelection;
    }

    /**
     * Setter for onHoldMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $onHoldMessageSelection
     * @return $this
     */
    public function setOnHoldMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection $onHoldMessageSelection)
    {
        $this->onHoldMessageSelection = $onHoldMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldMessageSelection()
    {
        $this->onHoldMessageSelection = null;
        return $this;
    }

    /**
     * Getter for onHoldMessageAudioFileDescription
     *
     * @return string
     */
    public function getOnHoldMessageAudioFileDescription()
    {
        return $this->onHoldMessageAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldMessageAudioFileDescription;
    }

    /**
     * Setter for onHoldMessageAudioFileDescription
     *
     * @param string $onHoldMessageAudioFileDescription
     * @return $this
     */
    public function setOnHoldMessageAudioFileDescription($onHoldMessageAudioFileDescription)
    {
        $this->onHoldMessageAudioFileDescription = $onHoldMessageAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldMessageAudioFileDescription()
    {
        $this->onHoldMessageAudioFileDescription = null;
        return $this;
    }

    /**
     * Getter for onHoldMessageVideoFileDescription
     *
     * @return string
     */
    public function getOnHoldMessageVideoFileDescription()
    {
        return $this->onHoldMessageVideoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldMessageVideoFileDescription;
    }

    /**
     * Setter for onHoldMessageVideoFileDescription
     *
     * @param string $onHoldMessageVideoFileDescription
     * @return $this
     */
    public function setOnHoldMessageVideoFileDescription($onHoldMessageVideoFileDescription)
    {
        $this->onHoldMessageVideoFileDescription = $onHoldMessageVideoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldMessageVideoFileDescription()
    {
        $this->onHoldMessageVideoFileDescription = null;
        return $this;
    }


}

