<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAssignedServicesGetListResponse
 *
 * Response to UserAssignedServicesGetListRequest.
 *         A user can have both user services and group services because of music
 * on hold.
 */
class UserAssignedServicesGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupServiceEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[]
     */
    private $groupServiceEntry = array(
        
    );

    /**
     * @ElementName userServiceEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[]
     */
    private $userServiceEntry = array(
        
    );

    /**
     * Getter for groupServiceEntry
     *
     * @ElementName groupServiceEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[]
     */
    public function getGroupServiceEntry()
    {
        return $this->groupServiceEntry;
    }

    /**
     * Setter for groupServiceEntry
     *
     * @ElementName groupServiceEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[] $groupServiceEntry
     * @return $this
     */
    public function setGroupServiceEntry($groupServiceEntry)
    {
        $this->groupServiceEntry = $groupServiceEntry;
        return $this;
    }

    /**
     * Adder for groupServiceEntry
     *
     * @ElementName groupServiceEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry $groupServiceEntry
     * @return $this
     */
    public function addGroupServiceEntry($groupServiceEntry)
    {
        $this->groupServiceEntry []= $groupServiceEntry;
        return $this;
    }

    /**
     * Getter for userServiceEntry
     *
     * @ElementName userServiceEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[]
     */
    public function getUserServiceEntry()
    {
        return $this->userServiceEntry;
    }

    /**
     * Setter for userServiceEntry
     *
     * @ElementName userServiceEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[] $userServiceEntry
     * @return $this
     */
    public function setUserServiceEntry($userServiceEntry)
    {
        $this->userServiceEntry = $userServiceEntry;
        return $this;
    }

    /**
     * Adder for userServiceEntry
     *
     * @ElementName userServiceEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry $userServiceEntry
     * @return $this
     */
    public function addUserServiceEntry($userServiceEntry)
    {
        $this->userServiceEntry []= $userServiceEntry;
        return $this;
    }


}

