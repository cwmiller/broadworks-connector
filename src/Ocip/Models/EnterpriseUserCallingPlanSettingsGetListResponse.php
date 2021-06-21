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
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:1214","type":"sequence"}]
 */
class EnterpriseUserCallingPlanSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallingPlanTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1214
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userCallingPlanTable = null;

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

