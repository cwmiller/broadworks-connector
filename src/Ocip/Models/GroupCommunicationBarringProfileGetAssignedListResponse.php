<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringProfileGetAssignedListResponse
 *
 * Response to the GroupCommunicationBarringProfileGetAssignedListRequest.
 *         The response contains a simple list of all communication barring profiles assigned to the group.
 *
 * @see GroupCommunicationBarringProfileGetAssignedListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2815","type":"sequence"}]
 */
class GroupCommunicationBarringProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName profileName
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2815
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $profileName = [
        
    ];

    /**
     * Getter for profileName
     *
     * @return string[]
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string[] $profileName
     * @return $this
     */
    public function setProfileName(array $profileName)
    {
        $this->profileName = $profileName;
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

    /**
     * Adder for profileName
     *
     * @param string $profileName
     * @return $this
     */
    public function addProfileName(string $profileName)
    {
        $this->profileName[] = $profileName;
        return $this;
    }
}

