<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentThresholdProfileGetListResponse
 *
 * Response to the GroupCallCenterAgentThresholdProfileGetListRequest.
 *         Contains a table with all the  Call Center Agent Threshold Profiles in
 * the Group.
 *         The column headings are: "Default", "Name", "Description".
 *
 * @see GroupCallCenterAgentThresholdProfileGetListRequest
 */
class GroupCallCenterAgentThresholdProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profilesTable = null;

    /**
     * Getter for profilesTable
     *
     * @ElementName profilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getProfilesTable()
    {
        return $this->profilesTable;
    }

    /**
     * Setter for profilesTable
     *
     * @ElementName profilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $profilesTable
     * @return $this
     */
    public function setProfilesTable($profilesTable)
    {
        $this->profilesTable = $profilesTable;
        return $this;
    }


}

