<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastAgentGetListResponse
 *
 * Response to the GroupCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupCallCenterCurrentAndPastAgentGetListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3063","type":"sequence"}]
 */
class GroupCallCenterCurrentAndPastAgentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:3063
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

    /**
     * @ElementName deletedAgentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:3063
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deletedAgentUserTable = null;

    /**
     * Getter for agentUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserTable;
    }

    /**
     * Setter for agentUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable
     * @return $this
     */
    public function setAgentUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable)
    {
        $this->agentUserTable = $agentUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserTable()
    {
        $this->agentUserTable = null;
        return $this;
    }

    /**
     * Getter for deletedAgentUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeletedAgentUserTable()
    {
        return $this->deletedAgentUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deletedAgentUserTable;
    }

    /**
     * Setter for deletedAgentUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deletedAgentUserTable
     * @return $this
     */
    public function setDeletedAgentUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deletedAgentUserTable)
    {
        $this->deletedAgentUserTable = $deletedAgentUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeletedAgentUserTable()
    {
        $this->deletedAgentUserTable = null;
        return $this;
    }


}

