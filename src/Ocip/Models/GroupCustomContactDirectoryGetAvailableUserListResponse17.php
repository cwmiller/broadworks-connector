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
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3575","type":"sequence"}]
 */
class GroupCustomContactDirectoryGetAvailableUserListResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3575
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

