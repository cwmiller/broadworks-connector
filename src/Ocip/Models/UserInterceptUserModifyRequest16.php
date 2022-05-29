<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInterceptUserModifyRequest16
 *
 * Modify the user's intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: UserInterceptUserModifyResponse21sp1 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserInterceptUserModifyResponse21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:13845","type":"sequence"}]
 */
class UserInterceptUserModifyRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    protected $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $videoFile = null;

    /**
     * @ElementName playNewPhoneNumber
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferPhoneNumber = null;

    /**
     * @ElementName rerouteOutboundCalls
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $rerouteOutboundCalls = null;

    /**
     * @ElementName outboundReroutePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $outboundReroutePhoneNumber = null;

    /**
     * @ElementName allowOutboundLocalCalls
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $allowOutboundLocalCalls = null;

    /**
     * @ElementName inboundCallMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptInboundCall|null
     */
    protected $inboundCallMode = null;

    /**
     * @ElementName alternateBlockingAnnouncement
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $alternateBlockingAnnouncement = null;

    /**
     * @ElementName routeToVoiceMail
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:13845
     * @var bool|null
     */
    protected $routeToVoiceMail = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
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

