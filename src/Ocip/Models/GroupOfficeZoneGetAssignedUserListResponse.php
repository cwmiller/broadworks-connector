<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOfficeZoneGetAssignedUserListResponse
 *
 * Response to GroupOfiiceZoneGetAssignedUserListRequest.  
 *         Contains a table of users that have the Office Zone assigned. The column
 * headings are: "User Id", "User Type", "Last Name", 
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana
 * Last Name" and "Hiragana First Name", "Extension".
 *         Office Zones can only be unassigned if the Location-Based Calling
 * Restrictions has been authorized to the group otherwise the request will fail.
 *
 * @see GroupOfiiceZoneGetAssignedUserListRequest
 */
class GroupOfficeZoneGetAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

