<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetAvailableUserListResponse
 *
 * Response to the GroupAccountAuthorizationCodesGetAvailableUserListRequest.
 *         The column headings are: "User Id", "Last Name", "First Name", "Hiragana
 * Last Name" and
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email
 * Address".
 */
class GroupAccountAuthorizationCodesGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

