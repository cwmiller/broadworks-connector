<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetResponse
 *
 * Response to the GroupDirectoryNumberHuntingGetRequest.
 *                 Contains a table with column headings: "User Id", "Last Name",
 *                 "First Name", "Hiragana Last Name", "Hiragana First Name",
 *                 "Phone Number", "Extension", "Department", "Email Address".
 *                 Replaced by: GroupDirectoryNumberHuntingGetResponse17sp1
 *
 * @see GroupDirectoryNumberHuntingGetRequest
 * @see GroupDirectoryNumberHuntingGetResponse17sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:30037","type":"sequence"}]
 */
class GroupDirectoryNumberHuntingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:30037
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

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


}

