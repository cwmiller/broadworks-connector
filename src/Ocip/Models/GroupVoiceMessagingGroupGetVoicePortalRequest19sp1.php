<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalRequest19sp1
 *
 * Request to get the group voice portal information for a voice messaging group.
 *         The response is either GroupVoiceMessagingGroupGetVoicePortalResponse19sp1 or ErrorResponse.
 *         
 *         Replaced by: GroupVoiceMessagingGroupGetVoicePortalRequest21sp1 in AS data mode.
 *
 * @see GroupVoiceMessagingGroupGetVoicePortalResponse19sp1
 * @see ErrorResponse
 * @see GroupVoiceMessagingGroupGetVoicePortalRequest21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5262","type":"sequence"}]
 */
class GroupVoiceMessagingGroupGetVoicePortalRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5262
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5262
     * @var string|null
     */
    private $groupId = null;

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


}

