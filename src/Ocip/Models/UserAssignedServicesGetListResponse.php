<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAssignedServicesGetListResponse
 *
 * Response to UserAssignedServicesGetListRequest.
 *         A user can have both user services and group services because of music on hold.
 *
 * @see UserAssignedServicesGetListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:840","type":"sequence"}]
 */
class UserAssignedServicesGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupServiceEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:840
     * @var \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[]
     */
    protected $groupServiceEntry = [
        
    ];

    /**
     * @ElementName userServiceEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:840
     * @var \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[]
     */
    protected $userServiceEntry = [
        
    ];

    /**
     * Getter for groupServiceEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[]
     */
    public function getGroupServiceEntry()
    {
        return $this->groupServiceEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceEntry;
    }

    /**
     * Setter for groupServiceEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[] $groupServiceEntry
     * @return $this
     */
    public function setGroupServiceEntry(array $groupServiceEntry)
    {
        $this->groupServiceEntry = $groupServiceEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceEntry()
    {
        $this->groupServiceEntry = null;
        return $this;
    }

    /**
     * Adder for groupServiceEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry $groupServiceEntry
     * @return $this
     */
    public function addGroupServiceEntry($groupServiceEntry)
    {
        $this->groupServiceEntry[] = $groupServiceEntry;
        return $this;
    }

    /**
     * Getter for userServiceEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[]
     */
    public function getUserServiceEntry()
    {
        return $this->userServiceEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceEntry;
    }

    /**
     * Setter for userServiceEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[] $userServiceEntry
     * @return $this
     */
    public function setUserServiceEntry(array $userServiceEntry)
    {
        $this->userServiceEntry = $userServiceEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceEntry()
    {
        $this->userServiceEntry = null;
        return $this;
    }

    /**
     * Adder for userServiceEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry $userServiceEntry
     * @return $this
     */
    public function addUserServiceEntry($userServiceEntry)
    {
        $this->userServiceEntry[] = $userServiceEntry;
        return $this;
    }
}

