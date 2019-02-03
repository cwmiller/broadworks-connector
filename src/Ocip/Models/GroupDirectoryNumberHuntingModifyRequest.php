<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDirectoryNumberHuntingModifyRequest
 *
 * Replaces a list of users as agents for a directory number hunting group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7c509136e6ce6be616e313c3b28a0449:119","type":"sequence"}]
 */
class GroupDirectoryNumberHuntingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 7c509136e6ce6be616e313c3b28a0449:119
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 7c509136e6ce6be616e313c3b28a0449:119
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agentUserIdList = null;

    /**
     * @ElementName useTerminateCallToAgentFirst
     * @Type bool
     * @Optional
     * @Group 7c509136e6ce6be616e313c3b28a0449:119
     * @var bool|null
     */
    private $useTerminateCallToAgentFirst = null;

    /**
     * @ElementName useOriginalAgentServicesForBusyAndNoAnswerCalls
     * @Type bool
     * @Optional
     * @Group 7c509136e6ce6be616e313c3b28a0449:119
     * @var bool|null
     */
    private $useOriginalAgentServicesForBusyAndNoAnswerCalls = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for agentUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agentUserIdList = null)
    {
        if ($agentUserIdList === null) {
            $this->agentUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentUserIdList = $agentUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserIdList()
    {
        $this->agentUserIdList = null;
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

