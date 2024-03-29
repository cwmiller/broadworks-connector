<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetAvailableHostListResponse
 *
 * Response to the UserFlexibleSeatingGuestGetAvailableHostListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address", "Association Limit Hours", "Enable Association Limit",
 *
 * @see UserFlexibleSeatingGuestGetAvailableHostListRequest
 * @Groups [{"id":"1d4e390f8cd01ca6f92589024d74dac6:388","type":"sequence"}]
 */
class UserFlexibleSeatingGuestGetAvailableHostListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName hostUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:388
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $hostUserTable = null;

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

