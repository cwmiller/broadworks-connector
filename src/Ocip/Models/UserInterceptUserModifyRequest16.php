<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserModifyRequest16
 *
 * Modify the user's intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: UserInterceptUserModifyResponse21sp1 in AS data mode
 */
class UserInterceptUserModifyRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName announcementSelection
     * @var string|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName playNewPhoneNumber
     * @var bool|null
     */
    private $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @var string|null
     */
    private $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName rerouteOutboundCalls
     * @var bool|null
     */
    private $rerouteOutboundCalls = null;

    /**
     * @ElementName outboundReroutePhoneNumber
     * @var string|null
     */
    private $outboundReroutePhoneNumber = null;

    /**
     * @ElementName allowOutboundLocalCalls
     * @var bool|null
     */
    private $allowOutboundLocalCalls = null;

    /**
     * @ElementName inboundCallMode
     * @var string|null
     */
    private $inboundCallMode = null;

    /**
     * @ElementName alternateBlockingAnnouncement
     * @var bool|null
     */
    private $alternateBlockingAnnouncement = null;

    /**
     * @ElementName routeToVoiceMail
     * @var bool|null
     */
    private $routeToVoiceMail = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for announcementSelection
     *
     * @ElementName announcementSelection
     * @return string|null
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection;
    }

    /**
     * Setter for announcementSelection
     *
     * @ElementName announcementSelection
     * @param string|null $announcementSelection
     * @return $this
     */
    public function setAnnouncementSelection($announcementSelection)
    {
        $this->announcementSelection = $announcementSelection;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * Getter for playNewPhoneNumber
     *
     * @ElementName playNewPhoneNumber
     * @return bool|null
     */
    public function getPlayNewPhoneNumber()
    {
        return $this->playNewPhoneNumber;
    }

    /**
     * Setter for playNewPhoneNumber
     *
     * @ElementName playNewPhoneNumber
     * @param bool|null $playNewPhoneNumber
     * @return $this
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber)
    {
        $this->playNewPhoneNumber = $playNewPhoneNumber;
        return $this;
    }

    /**
     * Getter for newPhoneNumber
     *
     * @ElementName newPhoneNumber
     * @return string|null
     */
    public function getNewPhoneNumber()
    {
        return $this->newPhoneNumber;
    }

    /**
     * Setter for newPhoneNumber
     *
     * @ElementName newPhoneNumber
     * @param string|null $newPhoneNumber
     * @return $this
     */
    public function setNewPhoneNumber($newPhoneNumber)
    {
        $this->newPhoneNumber = $newPhoneNumber;
        return $this;
    }

    /**
     * Getter for transferOnZeroToPhoneNumber
     *
     * @ElementName transferOnZeroToPhoneNumber
     * @return bool|null
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber;
    }

    /**
     * Setter for transferOnZeroToPhoneNumber
     *
     * @ElementName transferOnZeroToPhoneNumber
     * @param bool|null $transferOnZeroToPhoneNumber
     * @return $this
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $this->transferOnZeroToPhoneNumber = $transferOnZeroToPhoneNumber;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
        return $this;
    }

    /**
     * Getter for rerouteOutboundCalls
     *
     * @ElementName rerouteOutboundCalls
     * @return bool|null
     */
    public function getRerouteOutboundCalls()
    {
        return $this->rerouteOutboundCalls;
    }

    /**
     * Setter for rerouteOutboundCalls
     *
     * @ElementName rerouteOutboundCalls
     * @param bool|null $rerouteOutboundCalls
     * @return $this
     */
    public function setRerouteOutboundCalls($rerouteOutboundCalls)
    {
        $this->rerouteOutboundCalls = $rerouteOutboundCalls;
        return $this;
    }

    /**
     * Getter for outboundReroutePhoneNumber
     *
     * @ElementName outboundReroutePhoneNumber
     * @return string|null
     */
    public function getOutboundReroutePhoneNumber()
    {
        return $this->outboundReroutePhoneNumber;
    }

    /**
     * Setter for outboundReroutePhoneNumber
     *
     * @ElementName outboundReroutePhoneNumber
     * @param string|null $outboundReroutePhoneNumber
     * @return $this
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber)
    {
        $this->outboundReroutePhoneNumber = $outboundReroutePhoneNumber;
        return $this;
    }

    /**
     * Getter for allowOutboundLocalCalls
     *
     * @ElementName allowOutboundLocalCalls
     * @return bool|null
     */
    public function getAllowOutboundLocalCalls()
    {
        return $this->allowOutboundLocalCalls;
    }

    /**
     * Setter for allowOutboundLocalCalls
     *
     * @ElementName allowOutboundLocalCalls
     * @param bool|null $allowOutboundLocalCalls
     * @return $this
     */
    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls)
    {
        $this->allowOutboundLocalCalls = $allowOutboundLocalCalls;
        return $this;
    }

    /**
     * Getter for inboundCallMode
     *
     * @ElementName inboundCallMode
     * @return string|null
     */
    public function getInboundCallMode()
    {
        return $this->inboundCallMode;
    }

    /**
     * Setter for inboundCallMode
     *
     * @ElementName inboundCallMode
     * @param string|null $inboundCallMode
     * @return $this
     */
    public function setInboundCallMode($inboundCallMode)
    {
        $this->inboundCallMode = $inboundCallMode;
        return $this;
    }

    /**
     * Getter for alternateBlockingAnnouncement
     *
     * @ElementName alternateBlockingAnnouncement
     * @return bool|null
     */
    public function getAlternateBlockingAnnouncement()
    {
        return $this->alternateBlockingAnnouncement;
    }

    /**
     * Setter for alternateBlockingAnnouncement
     *
     * @ElementName alternateBlockingAnnouncement
     * @param bool|null $alternateBlockingAnnouncement
     * @return $this
     */
    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement)
    {
        $this->alternateBlockingAnnouncement = $alternateBlockingAnnouncement;
        return $this;
    }

    /**
     * Getter for routeToVoiceMail
     *
     * @ElementName routeToVoiceMail
     * @return bool|null
     */
    public function getRouteToVoiceMail()
    {
        return $this->routeToVoiceMail;
    }

    /**
     * Setter for routeToVoiceMail
     *
     * @ElementName routeToVoiceMail
     * @param bool|null $routeToVoiceMail
     * @return $this
     */
    public function setRouteToVoiceMail($routeToVoiceMail)
    {
        $this->routeToVoiceMail = $routeToVoiceMail;
        return $this;
    }


}

