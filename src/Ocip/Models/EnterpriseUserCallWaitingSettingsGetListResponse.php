<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseUserCallWaitingSettingsGetListResponse
 *
 * Response to the EnterpriseUserCallWaitingSettingsGetListRequest.
 *         Contains a table with column headings: "Group Id", "User Id", "Last
 * Name", "First Name", 
 *         "Hiragana Last Name", and "Hiragana First Name", "Phone Number",
 * "Extension", "Department", 
 *         "In Trunk Group", "Email Address", "Is Active".
 *         "Is Active" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see EnterpriseUserCallWaitingSettingsGetListRequest
 */
class EnterpriseUserCallWaitingSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallWaitingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

