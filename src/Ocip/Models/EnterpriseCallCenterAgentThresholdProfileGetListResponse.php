<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileGetListResponse
 *
 * Response to the EnterpriseCallCenterAgentThresholdProfileGetListRequest.
 *         Contains a table with all the  Call Center Agent Threshold Profiles in the Enterprise.
 *         The column headings are: "Default", "Name", "Description".
 *
 * @see EnterpriseCallCenterAgentThresholdProfileGetListRequest
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:490","type":"sequence"}]
 */
class EnterpriseCallCenterAgentThresholdProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:490
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

