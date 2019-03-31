<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreAlertingAnnouncementModifyRequest20
 *
 * Modify the group level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6165f2b4cd549de71fe8f3171488fdd8:153","type":"sequence"}]
 */
class GroupPreAlertingAnnouncementModifyRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName announcementInterruption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt|null
     */
    private $announcementInterruption = null;

    /**
     * @ElementName interruptionDigitSequence
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    private $interruptionDigitSequence = null;

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:153
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    private $videoFile = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for announcementInterruption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt
     */
    public function getAnnouncementInterruption()
    {
        return $this->announcementInterruption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementInterruption;
    }

    /**
     * Setter for announcementInterruption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption
     * @return $this
     */
    public function setAnnouncementInterruption(\CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption)
    {
        $this->announcementInterruption = $announcementInterruption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementInterruption()
    {
        $this->announcementInterruption = null;
        return $this;
    }

    /**
     * Getter for interruptionDigitSequence
     *
     * @return string
     */
    public function getInterruptionDigitSequence()
    {
        return $this->interruptionDigitSequence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interruptionDigitSequence;
    }

    /**
     * Setter for interruptionDigitSequence
     *
     * @param string $interruptionDigitSequence
     * @return $this
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence)
    {
        $this->interruptionDigitSequence = $interruptionDigitSequence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterruptionDigitSequence()
    {
        $this->interruptionDigitSequence = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $audioFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $videoFile)
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


}

