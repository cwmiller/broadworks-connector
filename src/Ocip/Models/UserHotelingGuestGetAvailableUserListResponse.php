<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetAvailableUserListResponse
 *
 * Response to the UserHotelingGuestGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name", "Hiragana First Name", "Association Limit Hours",
 * "Enable Association Limit",
 *         "Phone Number", "Extension", "Department", "Email Address".
 */
class UserHotelingGuestGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hostUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $hostUserTable = null;

    /**
     * Getter for hostUserTable
     *
     * @ElementName hostUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHostUserTable()
    {
        return $this->hostUserTable;
    }

    /**
     * Setter for hostUserTable
     *
     * @ElementName hostUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $hostUserTable
     * @return $this
     */
    public function setHostUserTable($hostUserTable)
    {
        $this->hostUserTable = $hostUserTable;
        return $this;
    }


}

