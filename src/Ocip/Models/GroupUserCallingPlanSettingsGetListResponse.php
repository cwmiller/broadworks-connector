<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallingPlanSettingsGetListResponse
 *
 * Response to the GroupUserCallingPlanSettingsGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana
 *         Last Name", and "Hiragana First Name", "Phone Number",
 *         "Extension", "Department", "In Trunk Group", "Email Address", "Use Custom Settings".
 *         "Use Custom Settings" is "true" or "false".
 *         "Phone Number" is presented in the E164 format.
 *
 * @see GroupUserCallingPlanSettingsGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8439","type":"sequence"}]
 */
class GroupUserCallingPlanSettingsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userCallingPlanTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:8439
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

