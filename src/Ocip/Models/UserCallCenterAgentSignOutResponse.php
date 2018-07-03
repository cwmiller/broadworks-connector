<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentSignOutResponse
 *
 * Response to the UserCallCenterAgentSignOutRequest. 
 *         It contains a list of call centers for which the agent is the last
 * signed-in agent.
 *         Contains a table with column headings: "Service User Id" and "Call
 * Center Name".
 *
 * @see UserCallCenterAgentSignOutRequest
 */
class UserCallCenterAgentSignOutResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callCenterTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCenterTable = null;

    /**
     * Getter for callCenterTable
     *
     * @ElementName callCenterTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @ElementName callCenterTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callCenterTable
     * @return $this
     */
    public function setCallCenterTable($callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }


}

