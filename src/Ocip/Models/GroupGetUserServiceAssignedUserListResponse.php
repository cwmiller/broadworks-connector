<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetUserServiceAssignedUserListResponse
 *
 * Return a table containing the list of users assigned the user service
 *         or service pack.  The table contains columns: "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana Last Name";
 *         "Hiragana First Name", "Extension".
 *         This is a response to the GroupGetUserServiceAssignedUserListRequest.
 *
 * @see GroupGetUserServiceAssignedUserListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6064","type":"sequence"}]
 */
class GroupGetUserServiceAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userListTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:6064
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userListTable = null;

    /**
     * Getter for userListTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserListTable()
    {
        return $this->userListTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userListTable;
    }

    /**
     * Setter for userListTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userListTable
     * @return $this
     */
    public function setUserListTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userListTable)
    {
        $this->userListTable = $userListTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserListTable()
    {
        $this->userListTable = null;
        return $this;
    }
}

