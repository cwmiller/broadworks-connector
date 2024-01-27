<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceResponse14
 *
 * Response to GroupHuntGroupGetInstanceRequest14.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight".
 *
 * @see GroupHuntGroupGetInstanceRequest14
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:10699","type":"sequence"}]
 */
class GroupHuntGroupGetInstanceResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    protected $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @var bool|null
     */
    protected $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @var bool|null
     */
    protected $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @MinInclusive 0
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName agentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $agentUserTable = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:10699
     * @var bool|null
     */
    protected $allowCallWaitingForAgents = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     */
    public function getPolicy()
    {
        return $this->policy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policy;
    }

    /**
     * Setter for policy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy
     * @return $this
     */
    public function setPolicy(\CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPolicy()
    {
        $this->policy = null;
        return $this;
    }

    /**
     * Getter for huntAfterNoAnswer
     *
     * @return bool
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->huntAfterNoAnswer;
    }

    /**
     * Setter for huntAfterNoAnswer
     *
     * @param bool $huntAfterNoAnswer
     * @return $this
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $this->huntAfterNoAnswer = $huntAfterNoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHuntAfterNoAnswer()
    {
        $this->huntAfterNoAnswer = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return int
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param int $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerNumberOfRings()
    {
        $this->noAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for forwardAfterTimeout
     *
     * @return bool
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterTimeout;
    }

    /**
     * Setter for forwardAfterTimeout
     *
     * @param bool $forwardAfterTimeout
     * @return $this
     */
    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $this->forwardAfterTimeout = $forwardAfterTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardAfterTimeout()
    {
        $this->forwardAfterTimeout = null;
        return $this;
    }

    /**
     * Getter for forwardTimeoutSeconds
     *
     * @return int
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardTimeoutSeconds;
    }

    /**
     * Setter for forwardTimeoutSeconds
     *
     * @param int $forwardTimeoutSeconds
     * @return $this
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $this->forwardTimeoutSeconds = $forwardTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardTimeoutSeconds()
    {
        $this->forwardTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
        return $this;
    }

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
     * Getter for allowCallWaitingForAgents
     *
     * @return bool
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @param bool $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallWaitingForAgents()
    {
        $this->allowCallWaitingForAgents = null;
        return $this;
    }
}

