<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOfficeZoneGetAssignedUserListResponse
 *
 * Response to GroupOfiiceZoneGetAssignedUserListRequest.  
 *         Contains a table of users that have the Office Zone assigned. The column headings are: "User Id", "User Type", "Last Name", 
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana Last Name" and "Hiragana First Name", "Extension".
 *         Office Zones can only be unassigned if the Location-Based Calling Restrictions has been authorized to the group otherwise the request will fail.
 *
 * @see GroupOfiiceZoneGetAssignedUserListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6495","type":"sequence"}]
 */
class GroupOfficeZoneGetAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:6495
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

