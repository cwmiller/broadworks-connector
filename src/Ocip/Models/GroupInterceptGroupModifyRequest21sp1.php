<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInterceptGroupModifyRequest21sp1
 *
 * Modify the group's intercept group service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           exemptInboundMobilityCalls
 *           exemptOutboundMobilityCalls
 *           disableParallelRingingToNetworkLocations
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"88893c72abbbb9aaf5aecca970191d94:109","type":"sequence"}]
 */
class GroupInterceptGroupModifyRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName inboundCallMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall|null
     */
    private $inboundCallMode = null;

    /**
     * @ElementName alternateBlockingAnnouncement
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $alternateBlockingAnnouncement = null;

    /**
     * @ElementName exemptInboundMobilityCalls
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $exemptInboundMobilityCalls = null;

    /**
     * @ElementName disableParallelRingingToNetworkLocations
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $disableParallelRingingToNetworkLocations = null;

    /**
     * @ElementName routeToVoiceMail
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $routeToVoiceMail = null;

    /**
     * @ElementName playNewPhoneNumber
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName outboundCallMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptOutboundCall|null
     */
    private $outboundCallMode = null;

    /**
     * @ElementName exemptOutboundMobilityCalls
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $exemptOutboundMobilityCalls = null;

    /**
     * @ElementName rerouteOutboundCalls
     * @Type bool
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var bool|null
     */
    private $rerouteOutboundCalls = null;

    /**
     * @ElementName outboundReroutePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:109
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $outboundReroutePhoneNumber = null;

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
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $audioFile)
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
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $videoFile)
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
     * @return string|null
     */
    public function getNewPhoneNumber()
    {
        return $this->newPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPhoneNumber;
    }

    /**
     * Setter for newPhoneNumber
     *
     * @param string|null $newPhoneNumber
     * @return $this
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        if ($newPhoneNumber === null) {
            $this->newPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->newPhoneNumber = $newPhoneNumber;
        }
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
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if ($transferPhoneNumber === null) {
            $this->transferPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferPhoneNumber = $transferPhoneNumber;
        }
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
     * @return string|null
     */
    public function getOutboundReroutePhoneNumber()
    {
        return $this->outboundReroutePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundReroutePhoneNumber;
    }

    /**
     * Setter for outboundReroutePhoneNumber
     *
     * @param string|null $outboundReroutePhoneNumber
     * @return $this
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber = null)
    {
        if ($outboundReroutePhoneNumber === null) {
            $this->outboundReroutePhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outboundReroutePhoneNumber = $outboundReroutePhoneNumber;
        }
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

