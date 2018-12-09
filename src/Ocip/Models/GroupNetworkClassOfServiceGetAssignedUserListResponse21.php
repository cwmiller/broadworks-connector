<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNetworkClassOfServiceGetAssignedUserListResponse21
 *
 * Response to GroupNetworkClassOfServiceGetAssignedUserListRequest21.
 *         Contains a table of users that have the Network Class of Service 
 *         assigned. The column headings are: "User Id", "User Type", "Last Name", "First Name",
 *         "Department", "Phone Number", "Email Address", "Service Provider Id", 
 *         "Group Id", "Hiragana Last Name" and "Hiragana First Name" , "Extension".
 *         The User type column will display Auto Attendant and the Call Center subtype. 
 *         Call Center - Basic, Call Center - Standard and Call Center - Premium will be displayed instead of Call Center and
 *         Auto Attendant (for the Basic Auto Attendant) and Auto Attendant - Standard instead of Auto Attendant.
 *
 * @see GroupNetworkClassOfServiceGetAssignedUserListRequest21
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:5288","type":"sequence"}]
 */
class GroupNetworkClassOfServiceGetAssignedUserListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 15129cd25fa2d5581f4edfd652c24f93:5288
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

