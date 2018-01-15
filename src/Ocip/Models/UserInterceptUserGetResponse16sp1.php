<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetResponse16sp1
 *
 * Response to the UserInterceptUserGetRequest16sp1.
 */
class UserInterceptUserGetResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @var string|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @var string|null
     */
    private $videoMediaType = null;

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
     * Getter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @return string|null
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @param string|null $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @ElementName audioMediaType
     * @return string|null
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @ElementName audioMediaType
     * @param string|null $audioMediaType
     * @return $this
     */
    public function setAudioMediaType($audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @return string|null
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @param string|null $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @ElementName videoMediaType
     * @return string|null
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @ElementName videoMediaType
     * @param string|null $videoMediaType
     * @return $this
     */
    public function setVideoMediaType($videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
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

