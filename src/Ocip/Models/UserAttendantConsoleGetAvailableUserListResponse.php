<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAttendantConsoleGetAvailableUserListResponse
 *
 * Response to UserAttendantConsoleGetAvailableUserListRequest.
 *         Returns a 10 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana
 * First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 */
class UserAttendantConsoleGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

