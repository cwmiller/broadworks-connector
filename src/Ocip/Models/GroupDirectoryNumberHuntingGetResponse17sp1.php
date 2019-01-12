<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingGetResponse17sp1
 *
 * Response to the GroupDirectoryNumberHuntingGetRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupDirectoryNumberHuntingGetRequest
 * @Groups [{"id":"7c509136e6ce6be616e313c3b28a0449:102","type":"sequence"}]
 */
class GroupDirectoryNumberHuntingGetResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7c509136e6ce6be616e313c3b28a0449:102
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

    /**
     * @ElementName useTerminateCallToAgentFirst
     * @Type bool
     * @Group 7c509136e6ce6be616e313c3b28a0449:102
     * @var bool|null
     */
    private $useTerminateCallToAgentFirst = null;

    /**
     * @ElementName useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @Type bool
     * @Group 7c509136e6ce6be616e313c3b28a0449:102
     * @var bool|null
     */
    private $useOriginalAgentServicesForBusyAndNoAnswerCalls = null;

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
     * Getter for useTerminateCallToAgentFirst
     *
     * @return bool
     */
    public function getUseTerminateCallToAgentFirst()
    {
        return $this->useTerminateCallToAgentFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useTerminateCallToAgentFirst;
    }

    /**
     * Setter for useTerminateCallToAgentFirst
     *
     * @param bool $useTerminateCallToAgentFirst
     * @return $this
     */
    public function setUseTerminateCallToAgentFirst($useTerminateCallToAgentFirst)
    {
        $this->useTerminateCallToAgentFirst = $useTerminateCallToAgentFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseTerminateCallToAgentFirst()
    {
        $this->useTerminateCallToAgentFirst = null;
        return $this;
    }

    /**
     * Getter for useOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @return bool
     */
    public function getUseOriginalAgentServicesForBusyAndNoAnswerCalls()
    {
        return $this->useOriginalAgentServicesForBusyAndNoAnswerCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useOriginalAgentServicesForBusyAndNoAnswerCalls;
    }

    /**
     * Setter for useOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @param bool $useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @return $this
     */
    public function setUseOriginalAgentServicesForBusyAndNoAnswerCalls($useOriginalAgentServicesForBusyAndNoAnswerCalls)
    {
        $this->useOriginalAgentServicesForBusyAndNoAnswerCalls = $useOriginalAgentServicesForBusyAndNoAnswerCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseOriginalAgentServicesForBusyAndNoAnswerCalls()
    {
        $this->useOriginalAgentServicesForBusyAndNoAnswerCalls = null;
        return $this;
    }


}

