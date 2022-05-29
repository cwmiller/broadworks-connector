<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAssignedServicesGetListResponse
 *
 * Response to UserAssignedServicesGetListRequest.
 *         A user can have both user services and group services because of music on hold.
 *
 * @see UserAssignedServicesGetListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:844","type":"sequence"}]
 */
class UserAssignedServicesGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupServiceEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:844
     * @var \CWM\BroadWorksConnector\Ocip\Models\AssignedGroupServicesEntry[]
     */
    protected $groupServiceEntry = array(
        
    );

    /**
     * @ElementName userServiceEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:844
     * @var \CWM\BroadWorksConnector\Ocip\Models\AssignedUserServicesEntry[]
     */
    protected $userServiceEntry = array(
        
    );

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

