<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileDeleteListRequest
 *
 * Delete one or more announcements from the group announcement repository
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupAnnouncementFileDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName announcementFileKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    private $announcementFileKey = array(
        
    );

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
     * Getter for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[]
     */
    public function getAnnouncementFileKey()
    {
        return $this->announcementFileKey;
    }

    /**
     * Setter for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey[] $announcementFileKey
     * @return $this
     */
    public function setAnnouncementFileKey(array $announcementFileKey)
    {
        $this->announcementFileKey = $announcementFileKey;
        return $this;
    }

    /**
     * Adder for announcementFileKey
     *
     * @ElementName announcementFileKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $announcementFileKey
     * @return $this
     */
    public function addAnnouncementFileKey($announcementFileKey)
    {
        $this->announcementFileKey []= $announcementFileKey;
        return $this;
    }


}

