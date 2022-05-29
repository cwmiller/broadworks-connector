<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentThresholdProfileModifyRequest
 *
 * Modifies an existing Call Center Agent Threshold Profile in the Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:2496","type":"sequence"}]
 */
class GroupCallCenterAgentThresholdProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName profileName
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $profileName = null;

    /**
     * @ElementName newProfileName
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newProfileName = null;

    /**
     * @ElementName profileDescription
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $profileDescription = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdCurrentCallStateIdleTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdCurrentCallStateIdleTimeRed = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdCurrentCallStateOnCallTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdCurrentCallStateOnCallTimeRed = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdCurrentAgentStateUnavailableTimeYellow = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdCurrentAgentStateUnavailableTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyInTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdAverageBusyInTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyInTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdAverageBusyInTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdAverageBusyOutTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdAverageBusyOutTimeRed = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdAverageWrapUpTimeYellow = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thresholdAverageWrapUpTimeRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @var bool|null
     */
    protected $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddressList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $notificationEmailAddressList = null;

    /**
     * @ElementName agentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:2496
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $agentUserIdList = null;

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
     * Getter for newProfileName
     *
     * @return string
     */
    public function getNewProfileName()
    {
        return $this->newProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newProfileName;
    }

    /**
     * Setter for newProfileName
     *
     * @param string $newProfileName
     * @return $this
     */
    public function setNewProfileName($newProfileName)
    {
        $this->newProfileName = $newProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewProfileName()
    {
        $this->newProfileName = null;
        return $this;
    }

    /**
     * Getter for profileDescription
     *
     * @return string|null
     */
    public function getProfileDescription()
    {
        return $this->profileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileDescription;
    }

    /**
     * Setter for profileDescription
     *
     * @param string|null $profileDescription
     * @return $this
     */
    public function setProfileDescription($profileDescription = null)
    {
        if ($profileDescription === null) {
            $this->profileDescription = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->profileDescription = $profileDescription;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateIdleTimeYellow()
    {
        return $this->thresholdCurrentCallStateIdleTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateIdleTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeYellow
     *
     * @param int|null $thresholdCurrentCallStateIdleTimeYellow
     * @return $this
     */
    public function setThresholdCurrentCallStateIdleTimeYellow($thresholdCurrentCallStateIdleTimeYellow = null)
    {
        if ($thresholdCurrentCallStateIdleTimeYellow === null) {
            $this->thresholdCurrentCallStateIdleTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentCallStateIdleTimeYellow = $thresholdCurrentCallStateIdleTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateIdleTimeRed()
    {
        return $this->thresholdCurrentCallStateIdleTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateIdleTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeRed
     *
     * @param int|null $thresholdCurrentCallStateIdleTimeRed
     * @return $this
     */
    public function setThresholdCurrentCallStateIdleTimeRed($thresholdCurrentCallStateIdleTimeRed = null)
    {
        if ($thresholdCurrentCallStateIdleTimeRed === null) {
            $this->thresholdCurrentCallStateIdleTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentCallStateIdleTimeRed = $thresholdCurrentCallStateIdleTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateOnCallTimeYellow()
    {
        return $this->thresholdCurrentCallStateOnCallTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateOnCallTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeYellow
     *
     * @param int|null $thresholdCurrentCallStateOnCallTimeYellow
     * @return $this
     */
    public function setThresholdCurrentCallStateOnCallTimeYellow($thresholdCurrentCallStateOnCallTimeYellow = null)
    {
        if ($thresholdCurrentCallStateOnCallTimeYellow === null) {
            $this->thresholdCurrentCallStateOnCallTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentCallStateOnCallTimeYellow = $thresholdCurrentCallStateOnCallTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateOnCallTimeRed()
    {
        return $this->thresholdCurrentCallStateOnCallTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallStateOnCallTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeRed
     *
     * @param int|null $thresholdCurrentCallStateOnCallTimeRed
     * @return $this
     */
    public function setThresholdCurrentCallStateOnCallTimeRed($thresholdCurrentCallStateOnCallTimeRed = null)
    {
        if ($thresholdCurrentCallStateOnCallTimeRed === null) {
            $this->thresholdCurrentCallStateOnCallTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentCallStateOnCallTimeRed = $thresholdCurrentCallStateOnCallTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentAgentStateUnavailableTimeYellow()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentAgentStateUnavailableTimeYellow;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeYellow
     *
     * @param int|null $thresholdCurrentAgentStateUnavailableTimeYellow
     * @return $this
     */
    public function setThresholdCurrentAgentStateUnavailableTimeYellow($thresholdCurrentAgentStateUnavailableTimeYellow = null)
    {
        if ($thresholdCurrentAgentStateUnavailableTimeYellow === null) {
            $this->thresholdCurrentAgentStateUnavailableTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentAgentStateUnavailableTimeYellow = $thresholdCurrentAgentStateUnavailableTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentAgentStateUnavailableTimeRed()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentAgentStateUnavailableTimeRed;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeRed
     *
     * @param int|null $thresholdCurrentAgentStateUnavailableTimeRed
     * @return $this
     */
    public function setThresholdCurrentAgentStateUnavailableTimeRed($thresholdCurrentAgentStateUnavailableTimeRed = null)
    {
        if ($thresholdCurrentAgentStateUnavailableTimeRed === null) {
            $this->thresholdCurrentAgentStateUnavailableTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentAgentStateUnavailableTimeRed = $thresholdCurrentAgentStateUnavailableTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdAverageBusyInTimeYellow()
    {
        return $this->thresholdAverageBusyInTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyInTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyInTimeYellow
     *
     * @param int|null $thresholdAverageBusyInTimeYellow
     * @return $this
     */
    public function setThresholdAverageBusyInTimeYellow($thresholdAverageBusyInTimeYellow = null)
    {
        if ($thresholdAverageBusyInTimeYellow === null) {
            $this->thresholdAverageBusyInTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageBusyInTimeYellow = $thresholdAverageBusyInTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdAverageBusyInTimeRed()
    {
        return $this->thresholdAverageBusyInTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyInTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyInTimeRed
     *
     * @param int|null $thresholdAverageBusyInTimeRed
     * @return $this
     */
    public function setThresholdAverageBusyInTimeRed($thresholdAverageBusyInTimeRed = null)
    {
        if ($thresholdAverageBusyInTimeRed === null) {
            $this->thresholdAverageBusyInTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageBusyInTimeRed = $thresholdAverageBusyInTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdAverageBusyOutTimeYellow()
    {
        return $this->thresholdAverageBusyOutTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyOutTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeYellow
     *
     * @param int|null $thresholdAverageBusyOutTimeYellow
     * @return $this
     */
    public function setThresholdAverageBusyOutTimeYellow($thresholdAverageBusyOutTimeYellow = null)
    {
        if ($thresholdAverageBusyOutTimeYellow === null) {
            $this->thresholdAverageBusyOutTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageBusyOutTimeYellow = $thresholdAverageBusyOutTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdAverageBusyOutTimeRed()
    {
        return $this->thresholdAverageBusyOutTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageBusyOutTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeRed
     *
     * @param int|null $thresholdAverageBusyOutTimeRed
     * @return $this
     */
    public function setThresholdAverageBusyOutTimeRed($thresholdAverageBusyOutTimeRed = null)
    {
        if ($thresholdAverageBusyOutTimeRed === null) {
            $this->thresholdAverageBusyOutTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageBusyOutTimeRed = $thresholdAverageBusyOutTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdAverageWrapUpTimeYellow()
    {
        return $this->thresholdAverageWrapUpTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageWrapUpTimeYellow;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeYellow
     *
     * @param int|null $thresholdAverageWrapUpTimeYellow
     * @return $this
     */
    public function setThresholdAverageWrapUpTimeYellow($thresholdAverageWrapUpTimeYellow = null)
    {
        if ($thresholdAverageWrapUpTimeYellow === null) {
            $this->thresholdAverageWrapUpTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageWrapUpTimeYellow = $thresholdAverageWrapUpTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdAverageWrapUpTimeRed()
    {
        return $this->thresholdAverageWrapUpTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageWrapUpTimeRed;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeRed
     *
     * @param int|null $thresholdAverageWrapUpTimeRed
     * @return $this
     */
    public function setThresholdAverageWrapUpTimeRed($thresholdAverageWrapUpTimeRed = null)
    {
        if ($thresholdAverageWrapUpTimeRed === null) {
            $this->thresholdAverageWrapUpTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageWrapUpTimeRed = $thresholdAverageWrapUpTimeRed;
        }
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
     * Getter for notificationEmailAddressList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList|null
     */
    public function getNotificationEmailAddressList()
    {
        return $this->notificationEmailAddressList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notificationEmailAddressList;
    }

    /**
     * Setter for notificationEmailAddressList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList|null $notificationEmailAddressList
     * @return $this
     */
    public function setNotificationEmailAddressList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList $notificationEmailAddressList = null)
    {
        if ($notificationEmailAddressList === null) {
            $this->notificationEmailAddressList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->notificationEmailAddressList = $notificationEmailAddressList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNotificationEmailAddressList()
    {
        $this->notificationEmailAddressList = null;
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


}

