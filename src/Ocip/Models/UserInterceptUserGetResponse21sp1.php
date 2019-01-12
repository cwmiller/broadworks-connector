<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserGetResponse21sp1
 *
 * Response to the UserInterceptUserGetRequest21sp1.
 *         
 *         The following elements are only used in AS data mode:
 *           exemptInboundMobilityCalls
 *           exemptOutboundMobilityCalls
 *           disableParallelRingingToNetworkLocations
 *
 * @see UserInterceptUserGetRequest21sp1
 * @Groups [{"id":"88893c72abbbb9aaf5aecca970191d94:288","type":"sequence"}]
 */
class UserInterceptUserGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $videoMediaType = null;

    /**
     * @ElementName inboundCallMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall|null
     */
    private $inboundCallMode = null;

    /**
     * @ElementName alternateBlockingAnnouncement
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $alternateBlockingAnnouncement = null;

    /**
     * @ElementName exemptInboundMobilityCalls
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $exemptInboundMobilityCalls = null;

    /**
     * @ElementName disableParallelRingingToNetworkLocations
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $disableParallelRingingToNetworkLocations = null;

    /**
     * @ElementName routeToVoiceMail
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $routeToVoiceMail = null;

    /**
     * @ElementName playNewPhoneNumber
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var string|null
     */
    private $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName outboundCallMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall|null
     */
    private $outboundCallMode = null;

    /**
     * @ElementName exemptOutboundMobilityCalls
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $exemptOutboundMobilityCalls = null;

    /**
     * @ElementName rerouteOutboundCalls
     * @Type bool
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var bool|null
     */
    private $rerouteOutboundCalls = null;

    /**
     * @ElementName outboundReroutePhoneNumber
     * @Type string
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:288
     * @var string|null
     */
    private $outboundReroutePhoneNumber = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for announcementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementSelection;
    }

    /**
     * Setter for announcementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection
     * @return $this
     */
    public function setAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection)
    {
        $this->announcementSelection = $announcementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementSelection()
    {
        $this->announcementSelection = null;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @return string
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @param string $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFileDescription()
    {
        $this->audioFileDescription = null;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType
     * @return $this
     */
    public function setAudioMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioMediaType()
    {
        $this->audioMediaType = null;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @return string
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @param string $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFileDescription()
    {
        $this->videoFileDescription = null;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType
     * @return $this
     */
    public function setVideoMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoMediaType()
    {
        $this->videoMediaType = null;
        return $this;
    }

    /**
     * Getter for inboundCallMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall
     */
    public function getInboundCallMode()
    {
        return $this->inboundCallMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inboundCallMode;
    }

    /**
     * Setter for inboundCallMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall $inboundCallMode
     * @return $this
     */
    public function setInboundCallMode(\CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall $inboundCallMode)
    {
        $this->inboundCallMode = $inboundCallMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInboundCallMode()
    {
        $this->inboundCallMode = null;
        return $this;
    }

    /**
     * Getter for alternateBlockingAnnouncement
     *
     * @return bool
     */
    public function getAlternateBlockingAnnouncement()
    {
        return $this->alternateBlockingAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateBlockingAnnouncement;
    }

    /**
     * Setter for alternateBlockingAnnouncement
     *
     * @param bool $alternateBlockingAnnouncement
     * @return $this
     */
    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement)
    {
        $this->alternateBlockingAnnouncement = $alternateBlockingAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateBlockingAnnouncement()
    {
        $this->alternateBlockingAnnouncement = null;
        return $this;
    }

    /**
     * Getter for exemptInboundMobilityCalls
     *
     * @return bool
     */
    public function getExemptInboundMobilityCalls()
    {
        return $this->exemptInboundMobilityCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exemptInboundMobilityCalls;
    }

    /**
     * Setter for exemptInboundMobilityCalls
     *
     * @param bool $exemptInboundMobilityCalls
     * @return $this
     */
    public function setExemptInboundMobilityCalls($exemptInboundMobilityCalls)
    {
        $this->exemptInboundMobilityCalls = $exemptInboundMobilityCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExemptInboundMobilityCalls()
    {
        $this->exemptInboundMobilityCalls = null;
        return $this;
    }

    /**
     * Getter for disableParallelRingingToNetworkLocations
     *
     * @return bool
     */
    public function getDisableParallelRingingToNetworkLocations()
    {
        return $this->disableParallelRingingToNetworkLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableParallelRingingToNetworkLocations;
    }

    /**
     * Setter for disableParallelRingingToNetworkLocations
     *
     * @param bool $disableParallelRingingToNetworkLocations
     * @return $this
     */
    public function setDisableParallelRingingToNetworkLocations($disableParallelRingingToNetworkLocations)
    {
        $this->disableParallelRingingToNetworkLocations = $disableParallelRingingToNetworkLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableParallelRingingToNetworkLocations()
    {
        $this->disableParallelRingingToNetworkLocations = null;
        return $this;
    }

    /**
     * Getter for routeToVoiceMail
     *
     * @return bool
     */
    public function getRouteToVoiceMail()
    {
        return $this->routeToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeToVoiceMail;
    }

    /**
     * Setter for routeToVoiceMail
     *
     * @param bool $routeToVoiceMail
     * @return $this
     */
    public function setRouteToVoiceMail($routeToVoiceMail)
    {
        $this->routeToVoiceMail = $routeToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteToVoiceMail()
    {
        $this->routeToVoiceMail = null;
        return $this;
    }

    /**
     * Getter for playNewPhoneNumber
     *
     * @return bool
     */
    public function getPlayNewPhoneNumber()
    {
        return $this->playNewPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playNewPhoneNumber;
    }

    /**
     * Setter for playNewPhoneNumber
     *
     * @param bool $playNewPhoneNumber
     * @return $this
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber)
    {
        $this->playNewPhoneNumber = $playNewPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayNewPhoneNumber()
    {
        $this->playNewPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for newPhoneNumber
     *
     * @return string
     */
    public function getNewPhoneNumber()
    {
        return $this->newPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPhoneNumber;
    }

    /**
     * Setter for newPhoneNumber
     *
     * @param string $newPhoneNumber
     * @return $this
     */
    public function setNewPhoneNumber($newPhoneNumber)
    {
        $this->newPhoneNumber = $newPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPhoneNumber()
    {
        $this->newPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for transferOnZeroToPhoneNumber
     *
     * @return bool
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferOnZeroToPhoneNumber;
    }

    /**
     * Setter for transferOnZeroToPhoneNumber
     *
     * @param bool $transferOnZeroToPhoneNumber
     * @return $this
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $this->transferOnZeroToPhoneNumber = $transferOnZeroToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferOnZeroToPhoneNumber()
    {
        $this->transferOnZeroToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @return string
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferPhoneNumber()
    {
        $this->transferPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for outboundCallMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall
     */
    public function getOutboundCallMode()
    {
        return $this->outboundCallMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundCallMode;
    }

    /**
     * Setter for outboundCallMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall $outboundCallMode
     * @return $this
     */
    public function setOutboundCallMode(\CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall $outboundCallMode)
    {
        $this->outboundCallMode = $outboundCallMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutboundCallMode()
    {
        $this->outboundCallMode = null;
        return $this;
    }

    /**
     * Getter for exemptOutboundMobilityCalls
     *
     * @return bool
     */
    public function getExemptOutboundMobilityCalls()
    {
        return $this->exemptOutboundMobilityCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exemptOutboundMobilityCalls;
    }

    /**
     * Setter for exemptOutboundMobilityCalls
     *
     * @param bool $exemptOutboundMobilityCalls
     * @return $this
     */
    public function setExemptOutboundMobilityCalls($exemptOutboundMobilityCalls)
    {
        $this->exemptOutboundMobilityCalls = $exemptOutboundMobilityCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExemptOutboundMobilityCalls()
    {
        $this->exemptOutboundMobilityCalls = null;
        return $this;
    }

    /**
     * Getter for rerouteOutboundCalls
     *
     * @return bool
     */
    public function getRerouteOutboundCalls()
    {
        return $this->rerouteOutboundCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rerouteOutboundCalls;
    }

    /**
     * Setter for rerouteOutboundCalls
     *
     * @param bool $rerouteOutboundCalls
     * @return $this
     */
    public function setRerouteOutboundCalls($rerouteOutboundCalls)
    {
        $this->rerouteOutboundCalls = $rerouteOutboundCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRerouteOutboundCalls()
    {
        $this->rerouteOutboundCalls = null;
        return $this;
    }

    /**
     * Getter for outboundReroutePhoneNumber
     *
     * @return string
     */
    public function getOutboundReroutePhoneNumber()
    {
        return $this->outboundReroutePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundReroutePhoneNumber;
    }

    /**
     * Setter for outboundReroutePhoneNumber
     *
     * @param string $outboundReroutePhoneNumber
     * @return $this
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber)
    {
        $this->outboundReroutePhoneNumber = $outboundReroutePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutboundReroutePhoneNumber()
    {
        $this->outboundReroutePhoneNumber = null;
        return $this;
    }


}

