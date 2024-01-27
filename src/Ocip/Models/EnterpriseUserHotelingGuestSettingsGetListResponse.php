<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseUserHotelingGuestSettingsGetListResponse
 *
 * Response to the EnterpriseUserHotelingGuestSettingsGetListRequest.
 *         Contains a table with column headings: "Group Id", "User Id", "Last Name", "First
 *         Name", "Hiragana Last Name", and "Hiragana First Name", "Phone
 *         Number", "Extension", "Department", "In Trunk Group", "Email Address", 
 *         "Is Active".
 *         "Is Active" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see EnterpriseUserHotelingGuestSettingsGetListRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:990","type":"sequence"}]
 */
class EnterpriseUserHotelingGuestSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userHotelingGuestTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 405ec18fe08719ecf74e749d7e18c88f:990
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userHotelingGuestTable = null;

    /**
     * Getter for userHotelingGuestTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserHotelingGuestTable()
    {
        return $this->userHotelingGuestTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userHotelingGuestTable;
    }

    /**
     * Setter for userHotelingGuestTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userHotelingGuestTable
     * @return $this
     */
    public function setUserHotelingGuestTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userHotelingGuestTable)
    {
        $this->userHotelingGuestTable = $userHotelingGuestTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserHotelingGuestTable()
    {
        $this->userHotelingGuestTable = null;
        return $this;
    }
}

