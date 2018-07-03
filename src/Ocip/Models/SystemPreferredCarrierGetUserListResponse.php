<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetUserListResponse
 *
 * Response to a SystemPreferredCarrierGetUserListRequest.
 *         Contains a table with one row per user.
 *         The table columns are: "User Id", "Service Provider Id", "Group Id",
 * "Last Name", "First Name", "Phone Number", "Email Address",
 *         "Hiragana Last Name", and "Hiragana First Name", "Extension",
 * "Department".
 *
 * @see SystemPreferredCarrierGetUserListRequest
 */
class SystemPreferredCarrierGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usersUsingCarrierTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usersUsingCarrierTable = null;

    /**
     * Getter for usersUsingCarrierTable
     *
     * @ElementName usersUsingCarrierTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUsersUsingCarrierTable()
    {
        return $this->usersUsingCarrierTable;
    }

    /**
     * Setter for usersUsingCarrierTable
     *
     * @ElementName usersUsingCarrierTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $usersUsingCarrierTable
     * @return $this
     */
    public function setUsersUsingCarrierTable($usersUsingCarrierTable)
    {
        $this->usersUsingCarrierTable = $usersUsingCarrierTable;
        return $this;
    }


}

