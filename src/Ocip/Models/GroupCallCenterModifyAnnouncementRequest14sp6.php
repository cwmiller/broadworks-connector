<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAnnouncementRequest14sp6
 *
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyAnnouncementRequest16
 */
class GroupCallCenterModifyAnnouncementRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName entranceMessageSelection
     * @var string|null
     */
    private $entranceMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $entranceMessageAudioFile = null;

    /**
     * @ElementName entranceMessageVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $entranceMessageVideoFile = null;

    /**
     * @ElementName periodicComfortMessageSelection
     * @var string|null
     */
    private $periodicComfortMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $periodicComfortMessageAudioFile = null;

    /**
     * @ElementName periodicComfortMessageVideoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $periodicComfortMessageVideoFile = null;

    /**
     * @ElementName onHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null
     */
    private $onHoldSource = null;

    /**
     * @ElementName onHoldUseAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $onHoldUseAlternateSourceForInternalCalls = null;

    /**
     * @ElementName onHoldInternalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null
     */
    private $onHoldInternalSource = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for entranceMessageSelection
     *
     * @ElementName entranceMessageSelection
     * @return string|null
     */
    public function getEntranceMessageSelection()
    {
        return $this->entranceMessageSelection;
    }

    /**
     * Setter for entranceMessageSelection
     *
     * @ElementName entranceMessageSelection
     * @param string|null $entranceMessageSelection
     * @return $this
     */
    public function setEntranceMessageSelection($entranceMessageSelection)
    {
        $this->entranceMessageSelection = $entranceMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFile
     *
     * @ElementName entranceMessageAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile;
    }

    /**
     * Setter for entranceMessageAudioFile
     *
     * @ElementName entranceMessageAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $entranceMessageAudioFile
     * @return $this
     */
    public function setEntranceMessageAudioFile($entranceMessageAudioFile)
    {
        $this->entranceMessageAudioFile = $entranceMessageAudioFile;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFile
     *
     * @ElementName entranceMessageVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile;
    }

    /**
     * Setter for entranceMessageVideoFile
     *
     * @ElementName entranceMessageVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $entranceMessageVideoFile
     * @return $this
     */
    public function setEntranceMessageVideoFile($entranceMessageVideoFile)
    {
        $this->entranceMessageVideoFile = $entranceMessageVideoFile;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageSelection
     *
     * @ElementName periodicComfortMessageSelection
     * @return string|null
     */
    public function getPeriodicComfortMessageSelection()
    {
        return $this->periodicComfortMessageSelection;
    }

    /**
     * Setter for periodicComfortMessageSelection
     *
     * @ElementName periodicComfortMessageSelection
     * @param string|null $periodicComfortMessageSelection
     * @return $this
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection)
    {
        $this->periodicComfortMessageSelection = $periodicComfortMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFile
     *
     * @ElementName periodicComfortMessageAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile;
    }

    /**
     * Setter for periodicComfortMessageAudioFile
     *
     * @ElementName periodicComfortMessageAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $periodicComfortMessageAudioFile
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile)
    {
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFile
     *
     * @ElementName periodicComfortMessageVideoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile;
    }

    /**
     * Setter for periodicComfortMessageVideoFile
     *
     * @ElementName periodicComfortMessageVideoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $periodicComfortMessageVideoFile
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile)
    {
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
        return $this;
    }

    /**
     * Getter for onHoldSource
     *
     * @ElementName onHoldSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null
     */
    public function getOnHoldSource()
    {
        return $this->onHoldSource;
    }

    /**
     * Setter for onHoldSource
     *
     * @ElementName onHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null $onHoldSource
     * @return $this
     */
    public function setOnHoldSource($onHoldSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null
     */
    public function getOnHoldInternalSource()
    {
        return $this->onHoldInternalSource;
    }

    /**
     * Setter for onHoldInternalSource
     *
     * @ElementName onHoldInternalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMusicOnHoldSourceModify|null $onHoldInternalSource
     * @return $this
     */
    public function setOnHoldInternalSource($onHoldInternalSource)
    {
        $this->onHoldInternalSource = $onHoldInternalSource;
        return $this;
    }


}

