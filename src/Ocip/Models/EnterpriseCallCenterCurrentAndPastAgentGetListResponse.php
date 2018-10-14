<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCurrentAndPastAgentGetListResponse
 *
 * Response to the EnterpriseCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see EnterpriseCallCenterCurrentAndPastAgentGetListRequest
 */
class EnterpriseCallCenterCurrentAndPastAgentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

    /**
     * @ElementName deletedAgentUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deletedAgentUserTable = null;

    /**
     * Getter for agentUserTable
     *
     * @ElementName agentUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable;
    }

    /**
     * Setter for agentUserTable
     *
     * @ElementName agentUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $agentUserTable
     * @return $this
     */
    public function setAgentUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable)
    {
        $this->agentUserTable = $agentUserTable;
        return $this;
    }

    /**
     * Getter for deletedAgentUserTable
     *
     * @ElementName deletedAgentUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeletedAgentUserTable()
    {
        return $this->deletedAgentUserTable;
    }

    /**
     * Setter for deletedAgentUserTable
     *
     * @ElementName deletedAgentUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deletedAgentUserTable
     * @return $this
     */
    public function setDeletedAgentUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deletedAgentUserTable)
    {
        $this->deletedAgentUserTable = $deletedAgentUserTable;
        return $this;
    }


}

