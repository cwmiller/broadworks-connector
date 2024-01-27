<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeAlertingGroupGetAvailableUserListResponse
 *
 * Response to the GroupFindMeFollowMeAlertingGroupGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupFindMeFollowMeAlertingGroupGetAvailableUserListRequest
 * @Groups [{"id":"146ca46a7097f08aed7a73ab65f17df8:152","type":"sequence"}]
 */
class GroupFindMeFollowMeAlertingGroupGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 146ca46a7097f08aed7a73ab65f17df8:152
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

