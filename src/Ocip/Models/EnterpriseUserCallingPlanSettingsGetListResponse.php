<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseUserCallingPlanSettingsGetListResponse
 *
 * Response to the EnterpriseUserCallingPlanSettingsGetListRequest.
 *         Contains a table with column headings: "Group Id", "User Id", "Last Name", "First
 *         Name", "Hiragana Last Name", and "Hiragana First Name", "Phone
 *         Number", "Extension", "Department", "In Trunk Group", "Email Address", 
 *         "Use Custom Settings".
 *         "Use Custom Settings" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see EnterpriseUserCallingPlanSettingsGetListRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:874","type":"sequence"}]
 */
class EnterpriseUserCallingPlanSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userCallingPlanTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 405ec18fe08719ecf74e749d7e18c88f:874
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userCallingPlanTable = null;

    /**
     * Getter for userCallingPlanTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserCallingPlanTable()
    {
        return $this->userCallingPlanTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCallingPlanTable;
    }

    /**
     * Setter for userCallingPlanTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallingPlanTable
     * @return $this
     */
    public function setUserCallingPlanTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallingPlanTable)
    {
        $this->userCallingPlanTable = $userCallingPlanTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCallingPlanTable()
    {
        $this->userCallingPlanTable = null;
        return $this;
    }
}

