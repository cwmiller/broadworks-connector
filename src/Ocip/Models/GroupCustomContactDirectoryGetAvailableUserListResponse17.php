<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryGetAvailableUserListResponse17
 *
 * Response to the 
 *         GroupCustomContactDirectoryGetAvailableUserListRequest17.
 *         Contains a table with column headings: "User Id", "Last Name", 
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *         "Virtual On-Net Phone Number", "Group Id", "Is Virtual On-Net User", 
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 *         If the entry represents a Virtual On-Net user then "User Id" is blank,  
 *         the "Virtual On-Net Phone Number" contains the phone Number of the 
 *         Virtual On-Net user, the "Group Id" contains the Virtual On-Net user's 
 *         group and the "Is Virtual On-Net User" contains true.
 *
 *         If the entry represents a BroadWorks user then the "User Id" contains 
 *         his BroadWorks userId, the "Virtual On-Net Phone Number" and 
 *         "Group Id" fields are blank and the "Is Virtual On-Net User" 
 *         contains false.
 *
 * @see GroupCustomContactDirectoryGetAvailableUserListRequest17
 */
class GroupCustomContactDirectoryGetAvailableUserListResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

