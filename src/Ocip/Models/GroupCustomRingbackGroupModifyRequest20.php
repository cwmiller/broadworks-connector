<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomRingbackGroupModifyRequest20
 *
 * Modify the group's custom ring back service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"2e482dcb2fc2f9ef31621d21b9816a42:85","type":"sequence"}]
 */
class GroupCustomRingbackGroupModifyRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20
     * @Nillable
     * @Optional
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $audioFile = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20
     * @Nillable
     * @Optional
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:85
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $videoFile = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $audioFile = null)
    {
        if ($audioFile === null) {
            $this->audioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->audioFile = $audioFile;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $videoFile = null)
    {
        if ($videoFile === null) {
            $this->videoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->videoFile = $videoFile;
        }
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

