<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentThresholdProfileGetListResponse
 *
 * Response to the GroupCallCenterAgentThresholdProfileGetListRequest.
 *         Contains a table with all the  Call Center Agent Threshold Profiles in the Group.
 *         The column headings are: "Default", "Name", "Description".
 *
 * @see GroupCallCenterAgentThresholdProfileGetListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:2347","type":"sequence"}]
 */
class GroupCallCenterAgentThresholdProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:2347
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profilesTable = null;

    /**
     * Getter for profilesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getProfilesTable()
    {
        return $this->profilesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profilesTable;
    }

    /**
     * Setter for profilesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profilesTable
     * @return $this
     */
    public function setProfilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profilesTable)
    {
        $this->profilesTable = $profilesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfilesTable()
    {
        $this->profilesTable = null;
        return $this;
    }


}

