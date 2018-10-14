<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetAvailableHostListResponse
 *
 * Response to the UserFlexibleSeatingGuestGetAvailableHostListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address", "Association
 * Limit Hours", "Enable Association Limit",
 *
 * @see UserFlexibleSeatingGuestGetAvailableHostListRequest
 */
class UserFlexibleSeatingGuestGetAvailableHostListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setHostUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $hostUserTable)
    {
        $this->hostUserTable = $hostUserTable;
        return $this;
    }


}

