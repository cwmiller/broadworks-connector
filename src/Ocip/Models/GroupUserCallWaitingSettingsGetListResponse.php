<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallWaitingSettingsGetListResponse
 *
 * Response to the GroupUserCallWaitingSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana
 *         Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address", "Is Active".
 *         "Is Active" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserCallWaitingSettingsGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8497","type":"sequence"}]
 */
class GroupUserCallWaitingSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userCallWaitingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:8497
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userCallWaitingTable = null;

    /**
     * Getter for userCallWaitingTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserCallWaitingTable()
    {
        return $this->userCallWaitingTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCallWaitingTable;
    }

    /**
     * Setter for userCallWaitingTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallWaitingTable
     * @return $this
     */
    public function setUserCallWaitingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallWaitingTable)
    {
        $this->userCallWaitingTable = $userCallWaitingTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCallWaitingTable()
    {
        $this->userCallWaitingTable = null;
        return $this;
    }
}

