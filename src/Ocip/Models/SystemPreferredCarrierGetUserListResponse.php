<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetUserListResponse
 *
 * Response to a SystemPreferredCarrierGetUserListRequest.
 *         Contains a table with one row per user.
 *         The table columns are: "User Id", "Service Provider Id", "Group Id", "Last Name", "First Name", "Phone Number", "Email Address",
 *         "Hiragana Last Name", and "Hiragana First Name", "Extension", "Department".
 *
 * @see SystemPreferredCarrierGetUserListRequest
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:496","type":"sequence"}]
 */
class SystemPreferredCarrierGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usersUsingCarrierTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 74a46a9bfccb54713c1d19735843f1df:496
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usersUsingCarrierTable = null;

    /**
     * Getter for usersUsingCarrierTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUsersUsingCarrierTable()
    {
        return $this->usersUsingCarrierTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usersUsingCarrierTable;
    }

    /**
     * Setter for usersUsingCarrierTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usersUsingCarrierTable
     * @return $this
     */
    public function setUsersUsingCarrierTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usersUsingCarrierTable)
    {
        $this->usersUsingCarrierTable = $usersUsingCarrierTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsersUsingCarrierTable()
    {
        $this->usersUsingCarrierTable = null;
        return $this;
    }


}

