<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetAvailableUserPagedSortedListResponse
 *
 * Response to the GroupHuntGroupGetAvailableUserPagedSortedListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *         "Phone Number", "Is Phone Number Activated", "Country Code","National Prefix", "Extension", "Department", "Department Type", 
 *         "Parent Department", "Parent Department Type", "Email Address", "IMP Id", "Mobile Number", "Group Id", "Group Name".
 *
 * @see GroupHuntGroupGetAvailableUserPagedSortedListRequest
 * @Groups [{"id":"bc829065f9d696d3ca7084121d57f8c0:328","type":"sequence"}]
 */
class GroupHuntGroupGetAvailableUserPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group bc829065f9d696d3ca7084121d57f8c0:328
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

