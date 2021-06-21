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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:8899","type":"sequence"}]
 */
class GroupCustomContactDirectoryGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:8899
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

