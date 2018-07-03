<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInterceptGroupGetResponse21sp1
 *
 * Response to the GroupInterceptGroupGetRequest21sp1.
 *         
 *         The following elements are only used in AS data mode:
 *           exemptInboundMobilityCalls
 *           exemptOutboundMobilityCalls
 *           disableParallelRingingToNetworkLocations
 *
 * @see GroupInterceptGroupGetRequest21sp1
 */
class GroupInterceptGroupGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName exemptInboundMobilityCalls
     * @var bool|null
     */
    private $exemptInboundMobilityCalls = null;

    /**
     * @ElementName disableParallelRingingToNetworkLocations
     * @var bool|null
     */
    private $disableParallelRingingToNetworkLocations = null;

    /**
     * @ElementName routeToVoiceMail
     * @var bool|null
     */
    private $routeToVoiceMail = null;

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
     * @ElementName outboundCallMode
     * @var string|null
     */
    private $outboundCallMode = null;

    /**
     * @ElementName exemptOutboundMobilityCalls
     * @var bool|null
     */
    private $exemptOutboundMobilityCalls = null;

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
     * Getter for exemptInboundMobilityCalls
     *
     * @ElementName exemptInboundMobilityCalls
     * @return bool|null
     */
    public function getExemptInboundMobilityCalls()
    {
        return $this->exemptInboundMobilityCalls;
    }

    /**
     * Setter for exemptInboundMobilityCalls
     *
     * @ElementName exemptInboundMobilityCalls
     * @param bool|null $exemptInboundMobilityCalls
     * @return $this
     */
    public function setExemptInboundMobilityCalls($exemptInboundMobilityCalls)
    {
        $this->exemptInboundMobilityCalls = $exemptInboundMobilityCalls;
        return $this;
    }

    /**
     * Getter for disableParallelRingingToNetworkLocations
     *
     * @ElementName disableParallelRingingToNetworkLocations
     * @return bool|null
     */
    public function getDisableParallelRingingToNetworkLocations()
    {
        return $this->disableParallelRingingToNetworkLocations;
    }

    /**
     * Setter for disableParallelRingingToNetworkLocations
     *
     * @ElementName disableParallelRingingToNetworkLocations
     * @param bool|null $disableParallelRingingToNetworkLocations
     * @return $this
     */
    public function setDisableParallelRingingToNetworkLocations($disableParallelRingingToNetworkLocations)
    {
        $this->disableParallelRingingToNetworkLocations = $disableParallelRingingToNetworkLocations;
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
     * Getter for outboundCallMode
     *
     * @ElementName outboundCallMode
     * @return string|null
     */
    public function getOutboundCallMode()
    {
        return $this->outboundCallMode;
    }

    /**
     * Setter for outboundCallMode
     *
     * @ElementName outboundCallMode
     * @param string|null $outboundCallMode
     * @return $this
     */
    public function setOutboundCallMode($outboundCallMode)
    {
        $this->outboundCallMode = $outboundCallMode;
        return $this;
    }

    /**
     * Getter for exemptOutboundMobilityCalls
     *
     * @ElementName exemptOutboundMobilityCalls
     * @return bool|null
     */
    public function getExemptOutboundMobilityCalls()
    {
        return $this->exemptOutboundMobilityCalls;
    }

    /**
     * Setter for exemptOutboundMobilityCalls
     *
     * @ElementName exemptOutboundMobilityCalls
     * @param bool|null $exemptOutboundMobilityCalls
     * @return $this
     */
    public function setExemptOutboundMobilityCalls($exemptOutboundMobilityCalls)
    {
        $this->exemptOutboundMobilityCalls = $exemptOutboundMobilityCalls;
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


}

