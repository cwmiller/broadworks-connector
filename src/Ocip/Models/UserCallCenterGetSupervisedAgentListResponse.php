<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetSupervisedAgentListResponse
 *
 * Response to the UserCallCenterGetSupervisedAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone
 * Number", "Extension",
 *         "Department", "Email Address", "IMP Id", "Location Code".
 *
 * @see UserCallCenterGetSupervisedAgentListRequest
 */
class UserCallCenterGetSupervisedAgentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

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


}

