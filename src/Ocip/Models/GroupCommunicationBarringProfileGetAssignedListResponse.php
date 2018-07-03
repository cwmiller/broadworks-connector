<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringProfileGetAssignedListResponse
 *
 * Response to the GroupCommunicationBarringProfileGetAssignedListRequest.
 *         The response contains a simple list of all communication barring
 * profiles assigned to the group.
 *
 * @see GroupCommunicationBarringProfileGetAssignedListRequest
 */
class GroupCommunicationBarringProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileName
     * @var string[]
     */
    private $profileName = array(
        
    );

    /**
     * Getter for profileName
     *
     * @ElementName profileName
     * @return string[]
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @ElementName profileName
     * @param string[] $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Adder for profileName
     *
     * @ElementName profileName
     * @param string $profileName
     * @return $this
     */
    public function addProfileName($profileName)
    {
        $this->profileName []= $profileName;
        return $this;
    }


}

