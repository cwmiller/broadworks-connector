<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringProfileGetAssignedListResponse
 *
 * Response to the GroupCommunicationBarringProfileGetAssignedListRequest.
 *         The response contains a simple list of all communication barring profiles assigned to the group.
 *
 * @see GroupCommunicationBarringProfileGetAssignedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2548","type":"sequence"}]
 */
class GroupCommunicationBarringProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileName
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2548
     * @var string[]
     */
    private $profileName = array(
        
    );

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

