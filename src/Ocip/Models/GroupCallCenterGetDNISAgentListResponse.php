<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISAgentListResponse
 *
 * Response to the GroupCallCenterGetDNISAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupCallCenterGetDNISAgentListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:4325","type":"sequence"}]
 */
class GroupCallCenterGetDNISAgentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName agentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:4325
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $agentTable = null;

    /**
     * Getter for agentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentTable()
    {
        return $this->agentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentTable;
    }

    /**
     * Setter for agentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable
     * @return $this
     */
    public function setAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentTable()
    {
        $this->agentTable = null;
        return $this;
    }
}

