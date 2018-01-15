<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingModifyRequest
 *
 * Replaces a list of users as agents for a directory number hunting group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDirectoryNumberHuntingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $agentUserIdList = null;

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
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList($agentUserIdList)
    {
        $this->agentUserIdList = $agentUserIdList;
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

