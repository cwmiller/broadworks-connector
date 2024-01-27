<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileDeleteListRequest
 *
 * Delete one or more announcements from the group announcement repository
 *
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           groupExternalId
 *           announcementFileExternalId
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1923","type":"sequence","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:1924","type":"choice","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:1925","type":"sequence"},{"id":"4b0e7857796c636464362260a2f8e5ee:1930","type":"sequence"}]}]}]
 */
class GroupAnnouncementFileDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1925
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1925
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName announcementFileKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:1925
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    protected $announcementFileKey = [
        
    ];

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1930
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * @ElementName announcementFileExternalId
     * @Type string
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:1930
     * @MaxLength 36
     * @var string[]
     */
    protected $announcementFileExternalId = [
        
    ];

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[] $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(array $announcementFileKey)
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
     * Adder for announcementFileKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey
     * @return $this
     */
    public function addAnnouncementFileKey($announcementFileKey)
    {
        $this->announcementFileKey[] = $announcementFileKey;
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
     * @return string[]
     */
    public function getAnnouncementFileExternalId()
    {
        return $this->announcementFileExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileExternalId;
    }

    /**
     * Setter for announcementFileExternalId
     *
     * @param string[] $announcementFileExternalId
     * @return $this
     */
    public function setAnnouncementFileExternalId(array $announcementFileExternalId)
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
     * Adder for announcementFileExternalId
     *
     * @param string $announcementFileExternalId
     * @return $this
     */
    public function addAnnouncementFileExternalId(string $announcementFileExternalId)
    {
        $this->announcementFileExternalId[] = $announcementFileExternalId;
        return $this;
    }
}

