<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileAddRequest
 *
 * Add an announcement to the group announcement repository
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           groupExternalId
 *           announcementFileExternalId
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1891","type":"sequence","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:1892","type":"choice","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:1893","type":"sequence"},{"id":"4b0e7857796c636464362260a2f8e5ee:1898","type":"sequence"}]}]}]
 */
class GroupAnnouncementFileAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1893
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1893
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName announcementFileName
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $announcementFileName = null;

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1898
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1898
     * @MaxLength 36
     * @var string|null
     */
    protected $announcementFileExternalId = null;

    /**
     * @ElementName announcementFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Group 4b0e7857796c636464362260a2f8e5ee:1891
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
     * Getter for announcementFileName
     *
     * @return string
     */
    public function getAnnouncementFileName()
    {
        return $this->announcementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileName;
    }

    /**
     * Setter for announcementFileName
     *
     * @param string $announcementFileName
     * @return $this
     */
    public function setAnnouncementFileName($announcementFileName)
    {
        $this->announcementFileName = $announcementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileName()
    {
        $this->announcementFileName = null;
        return $this;
    }

    /**
     * Getter for groupExternalId
     *
     * @return string
     */
    public function getGroupExternalId()
    {
        return $this->groupExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExternalId;
    }

    /**
     * Setter for groupExternalId
     *
     * @param string $groupExternalId
     * @return $this
     */
    public function setGroupExternalId($groupExternalId)
    {
        $this->groupExternalId = $groupExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExternalId()
    {
        $this->groupExternalId = null;
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

