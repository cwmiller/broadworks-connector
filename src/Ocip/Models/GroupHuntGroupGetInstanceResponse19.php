<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceResponse19
 *
 * Response to GroupHuntGroupGetInstanceRequest19.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight", "Phone Number", 
 *         "Extension", "Department", "Email Address".
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting
 *          includeHuntGroupNameInCLID
 *          
 *         The following elements are only used in HSS data mode:
 *            allowMembersToControlGroupBusy
 *            enableGroupBusy           
 *            
 *         Replaced by: GroupHuntGroupGetInstanceResponse19sp1
 */
class GroupHuntGroupGetInstanceResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @var string|null
     */
    private $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @var bool|null
     */
    private $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @var bool|null
     */
    private $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @var int|null
     */
    private $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName agentUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName useSystemHuntGroupCLIDSetting
     * @var bool|null
     */
    private $useSystemHuntGroupCLIDSetting = null;

    /**
     * @ElementName includeHuntGroupNameInCLID
     * @var bool|null
     */
    private $includeHuntGroupNameInCLID = null;

    /**
     * @ElementName enableNotReachableForwarding
     * @var bool|null
     */
    private $enableNotReachableForwarding = null;

    /**
     * @ElementName notReachableForwardToPhoneNumber
     * @var string|null
     */
    private $notReachableForwardToPhoneNumber = null;

    /**
     * @ElementName makeBusyWhenNotReachable
     * @var bool|null
     */
    private $makeBusyWhenNotReachable = null;

    /**
     * @ElementName allowMembersToControlGroupBusy
     * @var bool|null
     */
    private $allowMembersToControlGroupBusy = null;

    /**
     * @ElementName enableGroupBusy
     * @var bool|null
     */
    private $enableGroupBusy = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @ElementName policy
     * @return string|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Setter for policy
     *
     * @ElementName policy
     * @param string|null $policy
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Getter for huntAfterNoAnswer
     *
     * @ElementName huntAfterNoAnswer
     * @return bool|null
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer;
    }

    /**
     * Setter for huntAfterNoAnswer
     *
     * @ElementName huntAfterNoAnswer
     * @param bool|null $huntAfterNoAnswer
     * @return $this
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $this->huntAfterNoAnswer = $huntAfterNoAnswer;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return int|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param int|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for forwardAfterTimeout
     *
     * @ElementName forwardAfterTimeout
     * @return bool|null
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout;
    }

    /**
     * Setter for forwardAfterTimeout
     *
     * @ElementName forwardAfterTimeout
     * @param bool|null $forwardAfterTimeout
     * @return $this
     */
    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $this->forwardAfterTimeout = $forwardAfterTimeout;
        return $this;
    }

    /**
     * Getter for forwardTimeoutSeconds
     *
     * @ElementName forwardTimeoutSeconds
     * @return int|null
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds;
    }

    /**
     * Setter for forwardTimeoutSeconds
     *
     * @ElementName forwardTimeoutSeconds
     * @param int|null $forwardTimeoutSeconds
     * @return $this
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $this->forwardTimeoutSeconds = $forwardTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

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
     * Getter for allowCallWaitingForAgents
     *
     * @ElementName allowCallWaitingForAgents
     * @return bool|null
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @ElementName allowCallWaitingForAgents
     * @param bool|null $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * Getter for useSystemHuntGroupCLIDSetting
     *
     * @ElementName useSystemHuntGroupCLIDSetting
     * @return bool|null
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return $this->useSystemHuntGroupCLIDSetting;
    }

    /**
     * Setter for useSystemHuntGroupCLIDSetting
     *
     * @ElementName useSystemHuntGroupCLIDSetting
     * @param bool|null $useSystemHuntGroupCLIDSetting
     * @return $this
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting)
    {
        $this->useSystemHuntGroupCLIDSetting = $useSystemHuntGroupCLIDSetting;
        return $this;
    }

    /**
     * Getter for includeHuntGroupNameInCLID
     *
     * @ElementName includeHuntGroupNameInCLID
     * @return bool|null
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return $this->includeHuntGroupNameInCLID;
    }

    /**
     * Setter for includeHuntGroupNameInCLID
     *
     * @ElementName includeHuntGroupNameInCLID
     * @param bool|null $includeHuntGroupNameInCLID
     * @return $this
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID)
    {
        $this->includeHuntGroupNameInCLID = $includeHuntGroupNameInCLID;
        return $this;
    }

    /**
     * Getter for enableNotReachableForwarding
     *
     * @ElementName enableNotReachableForwarding
     * @return bool|null
     */
    public function getEnableNotReachableForwarding()
    {
        return $this->enableNotReachableForwarding;
    }

    /**
     * Setter for enableNotReachableForwarding
     *
     * @ElementName enableNotReachableForwarding
     * @param bool|null $enableNotReachableForwarding
     * @return $this
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding)
    {
        $this->enableNotReachableForwarding = $enableNotReachableForwarding;
        return $this;
    }

    /**
     * Getter for notReachableForwardToPhoneNumber
     *
     * @ElementName notReachableForwardToPhoneNumber
     * @return string|null
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return $this->notReachableForwardToPhoneNumber;
    }

    /**
     * Setter for notReachableForwardToPhoneNumber
     *
     * @ElementName notReachableForwardToPhoneNumber
     * @param string|null $notReachableForwardToPhoneNumber
     * @return $this
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber)
    {
        $this->notReachableForwardToPhoneNumber = $notReachableForwardToPhoneNumber;
        return $this;
    }

    /**
     * Getter for makeBusyWhenNotReachable
     *
     * @ElementName makeBusyWhenNotReachable
     * @return bool|null
     */
    public function getMakeBusyWhenNotReachable()
    {
        return $this->makeBusyWhenNotReachable;
    }

    /**
     * Setter for makeBusyWhenNotReachable
     *
     * @ElementName makeBusyWhenNotReachable
     * @param bool|null $makeBusyWhenNotReachable
     * @return $this
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable)
    {
        $this->makeBusyWhenNotReachable = $makeBusyWhenNotReachable;
        return $this;
    }

    /**
     * Getter for allowMembersToControlGroupBusy
     *
     * @ElementName allowMembersToControlGroupBusy
     * @return bool|null
     */
    public function getAllowMembersToControlGroupBusy()
    {
        return $this->allowMembersToControlGroupBusy;
    }

    /**
     * Setter for allowMembersToControlGroupBusy
     *
     * @ElementName allowMembersToControlGroupBusy
     * @param bool|null $allowMembersToControlGroupBusy
     * @return $this
     */
    public function setAllowMembersToControlGroupBusy($allowMembersToControlGroupBusy)
    {
        $this->allowMembersToControlGroupBusy = $allowMembersToControlGroupBusy;
        return $this;
    }

    /**
     * Getter for enableGroupBusy
     *
     * @ElementName enableGroupBusy
     * @return bool|null
     */
    public function getEnableGroupBusy()
    {
        return $this->enableGroupBusy;
    }

    /**
     * Setter for enableGroupBusy
     *
     * @ElementName enableGroupBusy
     * @param bool|null $enableGroupBusy
     * @return $this
     */
    public function setEnableGroupBusy($enableGroupBusy)
    {
        $this->enableGroupBusy = $enableGroupBusy;
        return $this;
    }


}

