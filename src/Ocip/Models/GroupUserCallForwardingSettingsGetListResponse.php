<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallForwardingSettingsGetListResponse
 *
 * Response to the GroupUserCallForwardingSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address",
 *         "Is Active", "Forwarding Address".
 *         "Is Active" is "true" or "false".
 *         The "Forwarding Address" is the Call Forwarding service's forwarding address.
 *         If the service is Call Forwarding Selective, the default forwarding address is returned.
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserCallForwardingSettingsGetListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8624","type":"sequence"}]
 */
class GroupUserCallForwardingSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallForwardingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8624
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userCallForwardingTable = null;

    /**
     * Getter for userCallForwardingTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserCallForwardingTable()
    {
        return $this->userCallForwardingTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCallForwardingTable;
    }

    /**
     * Setter for userCallForwardingTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallForwardingTable
     * @return $this
     */
    public function setUserCallForwardingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallForwardingTable)
    {
        $this->userCallForwardingTable = $userCallForwardingTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCallForwardingTable()
    {
        $this->userCallForwardingTable = null;
        return $this;
    }


}

