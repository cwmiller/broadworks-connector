<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAnnouncementRequest14sp6
 *
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyAnnouncementRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterModifyAnnouncementRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:8277","type":"sequence"}]
 */
class GroupCallCenterModifyAnnouncementRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName entranceMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $entranceMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $entranceMessageAudioFile = null;

    /**
     * @ElementName entranceMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $entranceMessageVideoFile = null;

    /**
     * @ElementName periodicComfortMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $periodicComfortMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $periodicComfortMessageAudioFile = null;

    /**
     * @ElementName periodicComfortMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $periodicComfortMessageVideoFile = null;

    /**
     * @ElementName onHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null
     */
    private $onHoldSource = null;

    /**
     * @ElementName onHoldUseAlternateSourceForInternalCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var bool|null
     */
    private $onHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName onHoldInternalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8277
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null
     */
    private $onHoldInternalSource = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

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
     * Getter for entranceMessageAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageAudioFile;
    }

    /**
     * Setter for entranceMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $entranceMessageAudioFile
     * @return $this
     */
    public function setEntranceMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $entranceMessageAudioFile)
    {
        $this->entranceMessageAudioFile = $entranceMessageAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageAudioFile()
    {
        $this->entranceMessageAudioFile = null;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entranceMessageVideoFile;
    }

    /**
     * Setter for entranceMessageVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $entranceMessageVideoFile
     * @return $this
     */
    public function setEntranceMessageVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $entranceMessageVideoFile)
    {
        $this->entranceMessageVideoFile = $entranceMessageVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntranceMessageVideoFile()
    {
        $this->entranceMessageVideoFile = null;
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
     * Getter for periodicComfortMessageAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageAudioFile;
    }

    /**
     * Setter for periodicComfortMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $periodicComfortMessageAudioFile
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $periodicComfortMessageAudioFile)
    {
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageAudioFile()
    {
        $this->periodicComfortMessageAudioFile = null;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->periodicComfortMessageVideoFile;
    }

    /**
     * Setter for periodicComfortMessageVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $periodicComfortMessageVideoFile
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $periodicComfortMessageVideoFile)
    {
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeriodicComfortMessageVideoFile()
    {
        $this->periodicComfortMessageVideoFile = null;
        return $this;
    }

    /**
     * Getter for onHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify
     */
    public function getOnHoldSource()
    {
        return $this->onHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldSource;
    }

    /**
     * Setter for onHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify $onHoldSource
     * @return $this
     */
    public function setOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify $onHoldSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify
     */
    public function getOnHoldInternalSource()
    {
        return $this->onHoldInternalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldInternalSource;
    }

    /**
     * Setter for onHoldInternalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify $onHoldInternalSource
     * @return $this
     */
    public function setOnHoldInternalSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify $onHoldInternalSource)
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

