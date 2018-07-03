<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallForwardingSettingsGetListResponse
 *
 * Response to the GroupUserCallForwardingSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name",
 *         "Hiragana Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address",
 *         "Is Active", "Forwarding Address".
 *         "Is Active" is "true" or "false".
 *         The "Forwarding Address" is the Call Forwarding service's forwarding
 * address.
 *         If the service is Call Forwarding Selective, the default forwarding
 * address is returned.
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserCallForwardingSettingsGetListRequest
 */
class GroupUserCallForwardingSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallForwardingTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userCallForwardingTable = null;

    /**
     * Getter for userCallForwardingTable
     *
     * @ElementName userCallForwardingTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserCallForwardingTable()
    {
        return $this->userCallForwardingTable;
    }

    /**
     * Setter for userCallForwardingTable
     *
     * @ElementName userCallForwardingTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userCallForwardingTable
     * @return $this
     */
    public function setUserCallForwardingTable($userCallForwardingTable)
    {
        $this->userCallForwardingTable = $userCallForwardingTable;
        return $this;
    }


}

