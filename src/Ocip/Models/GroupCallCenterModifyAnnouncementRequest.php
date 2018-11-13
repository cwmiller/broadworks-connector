<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAnnouncementRequest
 *
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterModifyAnnouncementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName entranceMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $entranceMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $entranceMessageAudioFile = null;

    /**
     * @ElementName entranceMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $entranceMessageVideoFile = null;

    /**
     * @ElementName periodicComfortMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $periodicComfortMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $periodicComfortMessageAudioFile = null;

    /**
     * @ElementName periodicComfortMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $periodicComfortMessageVideoFile = null;

    /**
     * @ElementName onHoldMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementSelection|null
     */
    private $onHoldMessageSelection = null;

    /**
     * @ElementName onHoldMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $onHoldMessageAudioFile = null;

    /**
     * @ElementName onHoldMessageVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $onHoldMessageVideoFile = null;

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
     * Getter for onHoldMessageAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getOnHoldMessageAudioFile()
    {
        return $this->onHoldMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldMessageAudioFile;
    }

    /**
     * Setter for onHoldMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $onHoldMessageAudioFile
     * @return $this
     */
    public function setOnHoldMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $onHoldMessageAudioFile)
    {
        $this->onHoldMessageAudioFile = $onHoldMessageAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldMessageAudioFile()
    {
        $this->onHoldMessageAudioFile = null;
        return $this;
    }

    /**
     * Getter for onHoldMessageVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getOnHoldMessageVideoFile()
    {
        return $this->onHoldMessageVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onHoldMessageVideoFile;
    }

    /**
     * Setter for onHoldMessageVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $onHoldMessageVideoFile
     * @return $this
     */
    public function setOnHoldMessageVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $onHoldMessageVideoFile)
    {
        $this->onHoldMessageVideoFile = $onHoldMessageVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnHoldMessageVideoFile()
    {
        $this->onHoldMessageVideoFile = null;
        return $this;
    }


}

