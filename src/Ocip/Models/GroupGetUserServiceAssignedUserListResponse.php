<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetUserServiceAssignedUserListResponse
 *
 * Return a table containing the list of users assigned the user service
 *         or service pack.  The table contains columns: "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana
 * Last Name";
 *         "Hiragana First Name", "Extension".
 *         This is a response to the GroupGetUserServiceAssignedUserListRequest.
 */
class GroupGetUserServiceAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userListTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userListTable = null;

    /**
     * Getter for userListTable
     *
     * @ElementName userListTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserListTable()
    {
        return $this->userListTable;
    }

    /**
     * Setter for userListTable
     *
     * @ElementName userListTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userListTable
     * @return $this
     */
    public function setUserListTable($userListTable)
    {
        $this->userListTable = $userListTable;
        return $this;
    }


}
