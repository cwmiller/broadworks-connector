<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNetworkClassOfServiceGetAssignedUserListResponse21
 *
 * Response to GroupNetworkClassOfServiceGetAssignedUserListRequest21.
 *         Contains a table of users that have the Network Class of Service 
 *         assigned. The column headings are: "User Id", "User Type", "Last Name",
 * "First Name",
 *         "Department", "Phone Number", "Email Address", "Service Provider Id", 
 *         "Group Id", "Hiragana Last Name" and "Hiragana First Name" ,
 * "Extension".
 *         The User type column will display Auto Attendant and the Call Center
 * subtype. 
 *         Call Center - Basic, Call Center - Standard and Call Center - Premium
 * will be displayed instead of Call Center and
 *         Auto Attendant (for the Basic Auto Attendant) and Auto Attendant -
 * Standard instead of Auto Attendant.
 *
 * @see GroupNetworkClassOfServiceGetAssignedUserListRequest21
 */
class GroupNetworkClassOfServiceGetAssignedUserListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

