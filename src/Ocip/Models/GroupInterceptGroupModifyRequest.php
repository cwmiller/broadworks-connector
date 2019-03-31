<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInterceptGroupModifyRequest
 *
 * Modify the group's intercept group service settings.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Replaced By: GroupInterceptGroupModifyRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupInterceptGroupModifyRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9145","type":"sequence"}]
 */
class GroupInterceptGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName announcementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName playNewPhoneNumber
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @var bool|null
     */
    private $playNewPhoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $newPhoneNumber = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9145
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferPhoneNumber = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $audioFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $videoFile)
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


}

