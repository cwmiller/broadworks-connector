<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringProfileModifyListRequest
 *
 * Assign a replacement list of Communication Barring Profiles to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         This command only applies to groups in an Enterprise. This command will
 * fail for groups in a Service Provider.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCommunicationBarringProfileModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName profileName
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList|null
     */
    private $profileName = null;

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
     * Getter for profileName
     *
     * @ElementName profileName
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList|null
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @ElementName profileName
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList|null $profileName
     * @return $this
     */
    public function setProfileName(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList $profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }


}

