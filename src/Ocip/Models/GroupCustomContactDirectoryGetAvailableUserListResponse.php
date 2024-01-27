<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryGetAvailableUserListResponse
 *
 * Response to the GroupCustomContactDirectoryGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", 
 *         "Hiragana Last Name", "Hiragana First Name".
 *         Replace by: GroupCustomContactDirectoryGetAvailableUserListResponse17
 *
 * @see GroupCustomContactDirectoryGetAvailableUserListRequest
 * @see GroupCustomContactDirectoryGetAvailableUserListResponse17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:9036","type":"sequence"}]
 */
class GroupCustomContactDirectoryGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:9036
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

