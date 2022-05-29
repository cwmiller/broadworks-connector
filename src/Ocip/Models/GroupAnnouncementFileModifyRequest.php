<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileModifyRequest
 *
 * Modify an existing announcement in the group repository
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           announcementFileExternalId
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2075","type":"sequence","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:2076","type":"choice","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:2077","type":"sequence"},{"id":"f3a93cf15de4abd7903673e44ee3e07b:2082","type":"sequence"}]}]}]
 */
class GroupAnnouncementFileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2077
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2077
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2077
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    protected $announcementFileKey = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2082
     * @MaxLength 36
     * @var string|null
     */
    protected $announcementFileExternalId = null;

    /**
     * @ElementName newAnnouncementFileName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2075
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $newAnnouncementFileName = null;

    /**
     * @ElementName announcementFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2075
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $announcementFile = null;

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
     * Getter for announcementFileKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileKey()
    {
        $this->announcementFileKey = null;
        return $this;
    }

    /**
     * Getter for announcementFileExternalId
     *
     * @return string
     */
    public function getAnnouncementFileExternalId()
    {
        return $this->announcementFileExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileExternalId;
    }

    /**
     * Setter for announcementFileExternalId
     *
     * @param string $announcementFileExternalId
     * @return $this
     */
    public function setAnnouncementFileExternalId($announcementFileExternalId)
    {
        $this->announcementFileExternalId = $announcementFileExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileExternalId()
    {
        $this->announcementFileExternalId = null;
        return $this;
    }

    /**
     * Getter for newAnnouncementFileName
     *
     * @return string
     */
    public function getNewAnnouncementFileName()
    {
        return $this->newAnnouncementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newAnnouncementFileName;
    }

    /**
     * Setter for newAnnouncementFileName
     *
     * @param string $newAnnouncementFileName
     * @return $this
     */
    public function setNewAnnouncementFileName($newAnnouncementFileName)
    {
        $this->newAnnouncementFileName = $newAnnouncementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewAnnouncementFileName()
    {
        $this->newAnnouncementFileName = null;
        return $this;
    }

    /**
     * Getter for announcementFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getAnnouncementFile()
    {
        return $this->announcementFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFile;
    }

    /**
     * Setter for announcementFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $announcementFile
     * @return $this
     */
    public function setAnnouncementFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $announcementFile)
    {
        $this->announcementFile = $announcementFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFile()
    {
        $this->announcementFile = null;
        return $this;
    }


}

