<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainGetAssignedUserListResponse
 *
 * Response to GroupDomainGetAssignedUserListRequest.
 *         The table columns are: "User Id", "Last Name", "First Name",
 * "Department", "Phone Number", "Email Address",
 *         "Service Provider Id", "Group Id", "Hiragana Last Name" and "Hiragana
 * First Name", "Extension".
 *
 * @see GroupDomainGetAssignedUserListRequest
 */
class GroupDomainGetAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

