<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInterceptGroupGetResponse16sp1
 *
 * Response to the GroupInterceptGroupGetRequest16sp1.
 *         
 *         Replaced by: GroupInterceptGroupGetResponse21sp1 in AS data mode
 *
 * @see GroupInterceptGroupGetRequest16sp1
 * @see GroupInterceptGroupGetResponse21sp1
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:1270","type":"sequence"}]
 */
class GroupInterceptGroupGetResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFileDescription
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoFileDescription
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $videoMediaType = null;

    /**
     * @ElementName playNewPhoneNumber
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var string|null
     */
    private $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName rerouteOutboundCalls
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $rerouteOutboundCalls = null;

    /**
     * @ElementName outboundReroutePhoneNumber
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var string|null
     */
    private $outboundReroutePhoneNumber = null;

    /**
     * @ElementName allowOutboundLocalCalls
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $allowOutboundLocalCalls = null;

    /**
     * @ElementName inboundCallMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall|null
     */
    private $inboundCallMode = null;

    /**
     * @ElementName alternateBlockingAnnouncement
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $alternateBlockingAnnouncement = null;

    /**
     * @ElementName routeToVoiceMail
     * @Type bool
     * @Group bb12a3589ab4748963f28f7ac9310f70:1270
     * @var bool|null
     */
    private $routeToVoiceMail = null;

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

    /**
     * Getter for allowOutboundLocalCalls
     *
     * @return bool
     */
    public function getAllowOutboundLocalCalls()
    {
        return $this->allowOutboundLocalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOutboundLocalCalls;
    }

    /**
     * Setter for allowOutboundLocalCalls
     *
     * @param bool $allowOutboundLocalCalls
     * @return $this
     */
    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls)
    {
        $this->allowOutboundLocalCalls = $allowOutboundLocalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOutboundLocalCalls()
    {
        $this->allowOutboundLocalCalls = null;
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


}

