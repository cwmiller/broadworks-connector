<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserHotelingGuestSettingsGetListResponse
 *
 * Response to the GroupUserHotelingGuestSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address", "Is Active".
 *         "Is Active" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserHotelingGuestSettingsGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8554","type":"sequence"}]
 */
class GroupUserHotelingGuestSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userHotelingGuestTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:8554
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

