<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileGetListResponse
 *
 * Response to the EnterpriseCallCenterAgentThresholdProfileGetListRequest.
 *         Contains a table with all the  Call Center Agent Threshold Profiles in
 * the Enterprise.
 *         The column headings are: "Default", "Name", "Description".
 */
class EnterpriseCallCenterAgentThresholdProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

