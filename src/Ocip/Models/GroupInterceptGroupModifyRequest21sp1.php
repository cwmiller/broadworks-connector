<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInterceptGroupModifyRequest21sp1
 *
 * Modify the group's intercept group service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
 *           exemptInboundMobilityCalls
 *           exemptOutboundMobilityCalls
 *           disableParallelRingingToNetworkLocations
 */
class GroupInterceptGroupModifyRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

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
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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

