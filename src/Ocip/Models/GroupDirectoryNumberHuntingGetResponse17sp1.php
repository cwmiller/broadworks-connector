<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetResponse17sp1
 *
 * Response to the GroupDirectoryNumberHuntingGetRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 */
class GroupDirectoryNumberHuntingGetResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

    /**
     * @ElementName useTerminateCallToAgentFirst
     * @var bool|null
     */
    private $useTerminateCallToAgentFirst = null;

    /**
     * @ElementName useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @var bool|null
     */
    private $useOriginalAgentServicesForBusyAndNoAnswerCalls = null;

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
    public function setAgentUserTable($agentUserTable)
    {
        $this->agentUserTable = $agentUserTable;
        return $this;
    }

    /**
     * Getter for useTerminateCallToAgentFirst
     *
     * @ElementName useTerminateCallToAgentFirst
     * @return bool|null
     */
    public function getUseTerminateCallToAgentFirst()
    {
        return $this->useTerminateCallToAgentFirst;
    }

    /**
     * Setter for useTerminateCallToAgentFirst
     *
     * @ElementName useTerminateCallToAgentFirst
     * @param bool|null $useTerminateCallToAgentFirst
     * @return $this
     */
    public function setUseTerminateCallToAgentFirst($useTerminateCallToAgentFirst)
    {
        $this->useTerminateCallToAgentFirst = $useTerminateCallToAgentFirst;
        return $this;
    }

    /**
     * Getter for useOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @ElementName useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @return bool|null
     */
    public function getUseOriginalAgentServicesForBusyAndNoAnswerCalls()
    {
        return $this->useOriginalAgentServicesForBusyAndNoAnswerCalls;
    }

    /**
     * Setter for useOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @ElementName useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @param bool|null $useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @return $this
     */
    public function setUseOriginalAgentServicesForBusyAndNoAnswerCalls($useOriginalAgentServicesForBusyAndNoAnswerCalls)
    {
        $this->useOriginalAgentServicesForBusyAndNoAnswerCalls = $useOriginalAgentServicesForBusyAndNoAnswerCalls;
        return $this;
    }


}

