<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserHotelingGuestSettingsGetListResponse
 *
 * Response to the GroupUserHotelingGuestSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name",
 *         "Hiragana Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address", "Is
 * Active".
 *         "Is Active" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 */
class GroupUserHotelingGuestSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userHotelingGuestTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userHotelingGuestTable = null;

    /**
     * Getter for userHotelingGuestTable
     *
     * @ElementName userHotelingGuestTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserHotelingGuestTable()
    {
        return $this->userHotelingGuestTable;
    }

    /**
     * Setter for userHotelingGuestTable
     *
     * @ElementName userHotelingGuestTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userHotelingGuestTable
     * @return $this
     */
    public function setUserHotelingGuestTable($userHotelingGuestTable)
    {
        $this->userHotelingGuestTable = $userHotelingGuestTable;
        return $this;
    }


}

