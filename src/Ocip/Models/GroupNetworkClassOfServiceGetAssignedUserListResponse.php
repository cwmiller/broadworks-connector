<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNetworkClassOfServiceGetAssignedUserListResponse
 *
 * Response to GroupNetworkClassOfServiceGetAssignedUserListRequest.
 *         Contains a table of users that have the Network Class of Service 
 *         assigned. The column headings are: "User Id", "User Type", "Last Name", "First Name",
 *         "Department", "Phone Number", "Email Address", "Service Provider Id", 
 *         "Group Id", "Hiragana Last Name" and "Hiragana First Name" , "Extension".
 *
 * @see GroupNetworkClassOfServiceGetAssignedUserListRequest
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:3939","type":"sequence"}]
 */
class GroupNetworkClassOfServiceGetAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 240b50f54d060859e5e275082fdf49f9:3939
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

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

