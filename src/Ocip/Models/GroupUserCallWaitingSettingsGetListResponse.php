<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallWaitingSettingsGetListResponse
 *
 * Response to the GroupUserCallWaitingSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana
 *         Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address", "Is
 * Active".
 *         "Is Active" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserCallWaitingSettingsGetListRequest
 */
class GroupUserCallWaitingSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallWaitingTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userCallWaitingTable = null;

    /**
     * Getter for userCallWaitingTable
     *
     * @ElementName userCallWaitingTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserCallWaitingTable()
    {
        return $this->userCallWaitingTable;
    }

    /**
     * Setter for userCallWaitingTable
     *
     * @ElementName userCallWaitingTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userCallWaitingTable
     * @return $this
     */
    public function setUserCallWaitingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallWaitingTable)
    {
        $this->userCallWaitingTable = $userCallWaitingTable;
        return $this;
    }


}

