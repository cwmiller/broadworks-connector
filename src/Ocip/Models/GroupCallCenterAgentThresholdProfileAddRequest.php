<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentThresholdProfileAddRequest
 *
 * Add a new Call Center Agent Threshold Profile in a Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:2140","type":"sequence"}]
 */
class GroupCallCenterAgentThresholdProfileAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName profileName
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $profileName = null;

    /**
     * @ElementName profileDescription
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $profileDescription = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdCurrentCallStateIdleTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdCurrentCallStateIdleTimeRed = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdCurrentCallStateOnCallTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdCurrentCallStateOnCallTimeRed = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdCurrentAgentStateUnavailableTimeYellow = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdCurrentAgentStateUnavailableTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyInTimeYellow
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdAverageBusyInTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyInTimeRed
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdAverageBusyInTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdAverageBusyOutTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeRed
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdAverageBusyOutTimeRed = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdAverageWrapUpTimeYellow = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeRed
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null
     */
    private $thresholdAverageWrapUpTimeRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddress
     * @Type string
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $notificationEmailAddress = array(
        
    );

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2140
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $agentUserId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for profileName
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileName()
    {
        $this->profileName = null;
        return $this;
    }

    /**
     * Getter for profileDescription
     *
     * @return string
     */
    public function getProfileDescription()
    {
        return $this->profileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileDescription;
    }

    /**
     * Setter for profileDescription
     *
     * @param string $profileDescription
     * @return $this
     */
    public function setProfileDescription($profileDescription)
    {
        $this->profileDescription = $profileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileDescription()
    {
        $this->profileDescription = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateIdleTimeYellow
     *
     * @return int
     */
    public function getThresholdCurrentCallStateIdleTimeYellow()
    {
        return $this->thresholdCurrentCallStateIdleTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateIdleTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeYellow
     *
     * @param int $thresholdCurrentCallStateIdleTimeYellow
     * @return $this
     */
    public function setThresholdCurrentCallStateIdleTimeYellow($thresholdCurrentCallStateIdleTimeYellow)
    {
        $this->thresholdCurrentCallStateIdleTimeYellow = $thresholdCurrentCallStateIdleTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentCallStateIdleTimeYellow()
    {
        $this->thresholdCurrentCallStateIdleTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateIdleTimeRed
     *
     * @return int
     */
    public function getThresholdCurrentCallStateIdleTimeRed()
    {
        return $this->thresholdCurrentCallStateIdleTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateIdleTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeRed
     *
     * @param int $thresholdCurrentCallStateIdleTimeRed
     * @return $this
     */
    public function setThresholdCurrentCallStateIdleTimeRed($thresholdCurrentCallStateIdleTimeRed)
    {
        $this->thresholdCurrentCallStateIdleTimeRed = $thresholdCurrentCallStateIdleTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentCallStateIdleTimeRed()
    {
        $this->thresholdCurrentCallStateIdleTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateOnCallTimeYellow
     *
     * @return int
     */
    public function getThresholdCurrentCallStateOnCallTimeYellow()
    {
        return $this->thresholdCurrentCallStateOnCallTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateOnCallTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeYellow
     *
     * @param int $thresholdCurrentCallStateOnCallTimeYellow
     * @return $this
     */
    public function setThresholdCurrentCallStateOnCallTimeYellow($thresholdCurrentCallStateOnCallTimeYellow)
    {
        $this->thresholdCurrentCallStateOnCallTimeYellow = $thresholdCurrentCallStateOnCallTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentCallStateOnCallTimeYellow()
    {
        $this->thresholdCurrentCallStateOnCallTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateOnCallTimeRed
     *
     * @return int
     */
    public function getThresholdCurrentCallStateOnCallTimeRed()
    {
        return $this->thresholdCurrentCallStateOnCallTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateOnCallTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeRed
     *
     * @param int $thresholdCurrentCallStateOnCallTimeRed
     * @return $this
     */
    public function setThresholdCurrentCallStateOnCallTimeRed($thresholdCurrentCallStateOnCallTimeRed)
    {
        $this->thresholdCurrentCallStateOnCallTimeRed = $thresholdCurrentCallStateOnCallTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentCallStateOnCallTimeRed()
    {
        $this->thresholdCurrentCallStateOnCallTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentAgentStateUnavailableTimeYellow
     *
     * @return int
     */
    public function getThresholdCurrentAgentStateUnavailableTimeYellow()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentAgentStateUnavailableTimeYellow;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeYellow
     *
     * @param int $thresholdCurrentAgentStateUnavailableTimeYellow
     * @return $this
     */
    public function setThresholdCurrentAgentStateUnavailableTimeYellow($thresholdCurrentAgentStateUnavailableTimeYellow)
    {
        $this->thresholdCurrentAgentStateUnavailableTimeYellow = $thresholdCurrentAgentStateUnavailableTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentAgentStateUnavailableTimeYellow()
    {
        $this->thresholdCurrentAgentStateUnavailableTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentAgentStateUnavailableTimeRed
     *
     * @return int
     */
    public function getThresholdCurrentAgentStateUnavailableTimeRed()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentAgentStateUnavailableTimeRed;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeRed
     *
     * @param int $thresholdCurrentAgentStateUnavailableTimeRed
     * @return $this
     */
    public function setThresholdCurrentAgentStateUnavailableTimeRed($thresholdCurrentAgentStateUnavailableTimeRed)
    {
        $this->thresholdCurrentAgentStateUnavailableTimeRed = $thresholdCurrentAgentStateUnavailableTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentAgentStateUnavailableTimeRed()
    {
        $this->thresholdCurrentAgentStateUnavailableTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyInTimeYellow
     *
     * @return int
     */
    public function getThresholdAverageBusyInTimeYellow()
    {
        return $this->thresholdAverageBusyInTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyInTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyInTimeYellow
     *
     * @param int $thresholdAverageBusyInTimeYellow
     * @return $this
     */
    public function setThresholdAverageBusyInTimeYellow($thresholdAverageBusyInTimeYellow)
    {
        $this->thresholdAverageBusyInTimeYellow = $thresholdAverageBusyInTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageBusyInTimeYellow()
    {
        $this->thresholdAverageBusyInTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyInTimeRed
     *
     * @return int
     */
    public function getThresholdAverageBusyInTimeRed()
    {
        return $this->thresholdAverageBusyInTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyInTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyInTimeRed
     *
     * @param int $thresholdAverageBusyInTimeRed
     * @return $this
     */
    public function setThresholdAverageBusyInTimeRed($thresholdAverageBusyInTimeRed)
    {
        $this->thresholdAverageBusyInTimeRed = $thresholdAverageBusyInTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageBusyInTimeRed()
    {
        $this->thresholdAverageBusyInTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyOutTimeYellow
     *
     * @return int
     */
    public function getThresholdAverageBusyOutTimeYellow()
    {
        return $this->thresholdAverageBusyOutTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyOutTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeYellow
     *
     * @param int $thresholdAverageBusyOutTimeYellow
     * @return $this
     */
    public function setThresholdAverageBusyOutTimeYellow($thresholdAverageBusyOutTimeYellow)
    {
        $this->thresholdAverageBusyOutTimeYellow = $thresholdAverageBusyOutTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageBusyOutTimeYellow()
    {
        $this->thresholdAverageBusyOutTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyOutTimeRed
     *
     * @return int
     */
    public function getThresholdAverageBusyOutTimeRed()
    {
        return $this->thresholdAverageBusyOutTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyOutTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeRed
     *
     * @param int $thresholdAverageBusyOutTimeRed
     * @return $this
     */
    public function setThresholdAverageBusyOutTimeRed($thresholdAverageBusyOutTimeRed)
    {
        $this->thresholdAverageBusyOutTimeRed = $thresholdAverageBusyOutTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageBusyOutTimeRed()
    {
        $this->thresholdAverageBusyOutTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageWrapUpTimeYellow
     *
     * @return int
     */
    public function getThresholdAverageWrapUpTimeYellow()
    {
        return $this->thresholdAverageWrapUpTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageWrapUpTimeYellow;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeYellow
     *
     * @param int $thresholdAverageWrapUpTimeYellow
     * @return $this
     */
    public function setThresholdAverageWrapUpTimeYellow($thresholdAverageWrapUpTimeYellow)
    {
        $this->thresholdAverageWrapUpTimeYellow = $thresholdAverageWrapUpTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageWrapUpTimeYellow()
    {
        $this->thresholdAverageWrapUpTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageWrapUpTimeRed
     *
     * @return int
     */
    public function getThresholdAverageWrapUpTimeRed()
    {
        return $this->thresholdAverageWrapUpTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageWrapUpTimeRed;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeRed
     *
     * @param int $thresholdAverageWrapUpTimeRed
     * @return $this
     */
    public function setThresholdAverageWrapUpTimeRed($thresholdAverageWrapUpTimeRed)
    {
        $this->thresholdAverageWrapUpTimeRed = $thresholdAverageWrapUpTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageWrapUpTimeRed()
    {
        $this->thresholdAverageWrapUpTimeRed = null;
        return $this;
    }

    /**
     * Getter for enableNotificationEmail
     *
     * @return bool
     */
    public function getEnableNotificationEmail()
    {
        return $this->enableNotificationEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNotificationEmail;
    }

    /**
     * Setter for enableNotificationEmail
     *
     * @param bool $enableNotificationEmail
     * @return $this
     */
    public function setEnableNotificationEmail($enableNotificationEmail)
    {
        $this->enableNotificationEmail = $enableNotificationEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNotificationEmail()
    {
        $this->enableNotificationEmail = null;
        return $this;
    }

    /**
     * Getter for notificationEmailAddress
     *
     * @return string[]
     */
    public function getNotificationEmailAddress()
    {
        return $this->notificationEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notificationEmailAddress;
    }

    /**
     * Setter for notificationEmailAddress
     *
     * @param string[] $notificationEmailAddress
     * @return $this
     */
    public function setNotificationEmailAddress(array $notificationEmailAddress)
    {
        $this->notificationEmailAddress = $notificationEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNotificationEmailAddress()
    {
        $this->notificationEmailAddress = null;
        return $this;
    }

    /**
     * Adder for notificationEmailAddress
     *
     * @param string $notificationEmailAddress
     * @return $this
     */
    public function addNotificationEmailAddress(string $notificationEmailAddress)
    {
        $this->notificationEmailAddress[] = $notificationEmailAddress;
        return $this;
    }

    /**
     * Getter for agentUserId
     *
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId[] = $agentUserId;
        return $this;
    }


}

