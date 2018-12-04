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
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:7188","type":"sequence"}]
 */
class GroupUserCallWaitingSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallWaitingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:7188
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userCallWaitingTable = null;

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

