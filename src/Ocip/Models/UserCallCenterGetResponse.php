<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetResponse
 *
 * Response to the UserCallCenterGetRequest.
 *         Contains the user's ACD state
 *         Indicates whether the agent is current available (logged in) to each
 * call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone
 * Number", "Extension", "Available", "Logoff Allowed".
 *
 * @see UserCallCenterGetRequest
 */
class UserCallCenterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentACDState
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null
     */
    private $agentACDState = null;

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for agentACDState
     *
     * @ElementName agentACDState
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null
     */
    public function getAgentACDState()
    {
        return $this->agentACDState;
    }

    /**
     * Setter for agentACDState
     *
     * @ElementName agentACDState
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null $agentACDState
     * @return $this
     */
    public function setAgentACDState(\CWM\BroadWorksConnector\Ocip\Models\AgentACDState $agentACDState)
    {
        $this->agentACDState = $agentACDState;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

