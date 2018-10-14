<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallingPlanSettingsGetListResponse
 *
 * Response to the GroupUserCallingPlanSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana
 *         Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address", "Use
 * Custom Settings".
 *         "Use Custom Settings" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserCallingPlanSettingsGetListRequest
 */
class GroupUserCallingPlanSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userCallingPlanTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userCallingPlanTable = null;

    /**
     * Getter for userCallingPlanTable
     *
     * @ElementName userCallingPlanTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserCallingPlanTable()
    {
        return $this->userCallingPlanTable;
    }

    /**
     * Setter for userCallingPlanTable
     *
     * @ElementName userCallingPlanTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userCallingPlanTable
     * @return $this
     */
    public function setUserCallingPlanTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userCallingPlanTable)
    {
        $this->userCallingPlanTable = $userCallingPlanTable;
        return $this;
    }


}

