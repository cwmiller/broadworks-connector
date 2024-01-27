<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringProfileModifyListRequest
 *
 * Assign a replacement list of Communication Barring Profiles to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         This command only applies to groups in an Enterprise. This command will fail for groups in a Service Provider.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2832","type":"sequence"}]
 */
class GroupCommunicationBarringProfileModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2832
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2832
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName profileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2832
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $profileName = null;

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
     * Getter for profileName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList|null
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList|null $profileName
     * @return $this
     */
    public function setProfileName(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringProfileReplacementList $profileName = null)
    {
        if ($profileName === null) {
            $this->profileName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->profileName = $profileName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileName()
    {
        $this->profileName = null;
        return $this;
    }
}

