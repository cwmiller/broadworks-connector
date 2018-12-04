<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetAvailableUserListResponse
 *
 * Response to the UserHotelingGuestGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Association Limit Hours", "Enable Association Limit",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see UserHotelingGuestGetAvailableUserListRequest
 * @Groups [{"id":"13758dca4b1e7aaa8febe2ec5809ebf9:67","type":"sequence"}]
 */
class UserHotelingGuestGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName hostUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 13758dca4b1e7aaa8febe2ec5809ebf9:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $hostUserTable = null;

    /**
     * Getter for hostUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getHostUserTable()
    {
        return $this->hostUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserTable;
    }

    /**
     * Setter for hostUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $hostUserTable
     * @return $this
     */
    public function setHostUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $hostUserTable)
    {
        $this->hostUserTable = $hostUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostUserTable()
    {
        $this->hostUserTable = null;
        return $this;
    }


}

