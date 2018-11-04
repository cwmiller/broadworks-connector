<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileModifyRequest
 *
 * Modifies an existing Call Center Agent Threshold Profile in the Enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterAgentThresholdProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName profileName
     * @var string|null
     */
    private $profileName = null;

    /**
     * @ElementName newProfileName
     * @var string|null
     */
    private $newProfileName = null;

    /**
     * @ElementName profileDescription
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $profileDescription = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallStateIdleTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallStateIdleTimeRed = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallStateOnCallTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallStateOnCallTimeRed = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentAgentStateUnavailableTimeYellow = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentAgentStateUnavailableTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyInTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageBusyInTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyInTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageBusyInTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageBusyOutTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageBusyOutTimeRed = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageWrapUpTimeYellow = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageWrapUpTimeRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddressList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $notificationEmailAddressList = null;

    /**
     * @ElementName agentUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agentUserIdList = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for profileName
     *
     * @ElementName profileName
     * @return string|null
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @ElementName profileName
     * @param string|null $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Getter for newProfileName
     *
     * @ElementName newProfileName
     * @return string|null
     */
    public function getNewProfileName()
    {
        return $this->newProfileName;
    }

    /**
     * Setter for newProfileName
     *
     * @ElementName newProfileName
     * @param string|null $newProfileName
     * @return $this
     */
    public function setNewProfileName($newProfileName)
    {
        $this->newProfileName = $newProfileName;
        return $this;
    }

    /**
     * Getter for profileDescription
     *
     * @ElementName profileDescription
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProfileDescription()
    {
        return $this->profileDescription;
    }

    /**
     * Setter for profileDescription
     *
     * @ElementName profileDescription
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $profileDescription
     * @return $this
     */
    public function setProfileDescription($profileDescription)
    {
        $this->profileDescription = $profileDescription;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateIdleTimeYellow
     *
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentCallStateIdleTimeYellow()
    {
        return $this->thresholdCurrentCallStateIdleTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeYellow
     *
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentCallStateIdleTimeYellow
     * @return $this
     */
    public function setThresholdCurrentCallStateIdleTimeYellow($thresholdCurrentCallStateIdleTimeYellow)
    {
        $this->thresholdCurrentCallStateIdleTimeYellow = $thresholdCurrentCallStateIdleTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateIdleTimeRed
     *
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentCallStateIdleTimeRed()
    {
        return $this->thresholdCurrentCallStateIdleTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeRed
     *
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentCallStateIdleTimeRed
     * @return $this
     */
    public function setThresholdCurrentCallStateIdleTimeRed($thresholdCurrentCallStateIdleTimeRed)
    {
        $this->thresholdCurrentCallStateIdleTimeRed = $thresholdCurrentCallStateIdleTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateOnCallTimeYellow
     *
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentCallStateOnCallTimeYellow()
    {
        return $this->thresholdCurrentCallStateOnCallTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeYellow
     *
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentCallStateOnCallTimeYellow
     * @return $this
     */
    public function setThresholdCurrentCallStateOnCallTimeYellow($thresholdCurrentCallStateOnCallTimeYellow)
    {
        $this->thresholdCurrentCallStateOnCallTimeYellow = $thresholdCurrentCallStateOnCallTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallStateOnCallTimeRed
     *
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentCallStateOnCallTimeRed()
    {
        return $this->thresholdCurrentCallStateOnCallTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeRed
     *
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentCallStateOnCallTimeRed
     * @return $this
     */
    public function setThresholdCurrentCallStateOnCallTimeRed($thresholdCurrentCallStateOnCallTimeRed)
    {
        $this->thresholdCurrentCallStateOnCallTimeRed = $thresholdCurrentCallStateOnCallTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdCurrentAgentStateUnavailableTimeYellow
     *
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentAgentStateUnavailableTimeYellow()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeYellow;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeYellow
     *
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentAgentStateUnavailableTimeYellow
     * @return $this
     */
    public function setThresholdCurrentAgentStateUnavailableTimeYellow($thresholdCurrentAgentStateUnavailableTimeYellow)
    {
        $this->thresholdCurrentAgentStateUnavailableTimeYellow = $thresholdCurrentAgentStateUnavailableTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdCurrentAgentStateUnavailableTimeRed
     *
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentAgentStateUnavailableTimeRed()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeRed;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeRed
     *
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentAgentStateUnavailableTimeRed
     * @return $this
     */
    public function setThresholdCurrentAgentStateUnavailableTimeRed($thresholdCurrentAgentStateUnavailableTimeRed)
    {
        $this->thresholdCurrentAgentStateUnavailableTimeRed = $thresholdCurrentAgentStateUnavailableTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyInTimeYellow
     *
     * @ElementName thresholdAverageBusyInTimeYellow
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageBusyInTimeYellow()
    {
        return $this->thresholdAverageBusyInTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyInTimeYellow
     *
     * @ElementName thresholdAverageBusyInTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageBusyInTimeYellow
     * @return $this
     */
    public function setThresholdAverageBusyInTimeYellow($thresholdAverageBusyInTimeYellow)
    {
        $this->thresholdAverageBusyInTimeYellow = $thresholdAverageBusyInTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyInTimeRed
     *
     * @ElementName thresholdAverageBusyInTimeRed
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageBusyInTimeRed()
    {
        return $this->thresholdAverageBusyInTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyInTimeRed
     *
     * @ElementName thresholdAverageBusyInTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageBusyInTimeRed
     * @return $this
     */
    public function setThresholdAverageBusyInTimeRed($thresholdAverageBusyInTimeRed)
    {
        $this->thresholdAverageBusyInTimeRed = $thresholdAverageBusyInTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyOutTimeYellow
     *
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageBusyOutTimeYellow()
    {
        return $this->thresholdAverageBusyOutTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeYellow
     *
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageBusyOutTimeYellow
     * @return $this
     */
    public function setThresholdAverageBusyOutTimeYellow($thresholdAverageBusyOutTimeYellow)
    {
        $this->thresholdAverageBusyOutTimeYellow = $thresholdAverageBusyOutTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdAverageBusyOutTimeRed
     *
     * @ElementName thresholdAverageBusyOutTimeRed
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageBusyOutTimeRed()
    {
        return $this->thresholdAverageBusyOutTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeRed
     *
     * @ElementName thresholdAverageBusyOutTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageBusyOutTimeRed
     * @return $this
     */
    public function setThresholdAverageBusyOutTimeRed($thresholdAverageBusyOutTimeRed)
    {
        $this->thresholdAverageBusyOutTimeRed = $thresholdAverageBusyOutTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdAverageWrapUpTimeYellow
     *
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageWrapUpTimeYellow()
    {
        return $this->thresholdAverageWrapUpTimeYellow;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeYellow
     *
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageWrapUpTimeYellow
     * @return $this
     */
    public function setThresholdAverageWrapUpTimeYellow($thresholdAverageWrapUpTimeYellow)
    {
        $this->thresholdAverageWrapUpTimeYellow = $thresholdAverageWrapUpTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdAverageWrapUpTimeRed
     *
     * @ElementName thresholdAverageWrapUpTimeRed
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageWrapUpTimeRed()
    {
        return $this->thresholdAverageWrapUpTimeRed;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeRed
     *
     * @ElementName thresholdAverageWrapUpTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageWrapUpTimeRed
     * @return $this
     */
    public function setThresholdAverageWrapUpTimeRed($thresholdAverageWrapUpTimeRed)
    {
        $this->thresholdAverageWrapUpTimeRed = $thresholdAverageWrapUpTimeRed;
        return $this;
    }

    /**
     * Getter for enableNotificationEmail
     *
     * @ElementName enableNotificationEmail
     * @return bool|null
     */
    public function getEnableNotificationEmail()
    {
        return $this->enableNotificationEmail;
    }

    /**
     * Setter for enableNotificationEmail
     *
     * @ElementName enableNotificationEmail
     * @param bool|null $enableNotificationEmail
     * @return $this
     */
    public function setEnableNotificationEmail($enableNotificationEmail)
    {
        $this->enableNotificationEmail = $enableNotificationEmail;
        return $this;
    }

    /**
     * Getter for notificationEmailAddressList
     *
     * @ElementName notificationEmailAddressList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNotificationEmailAddressList()
    {
        return $this->notificationEmailAddressList;
    }

    /**
     * Setter for notificationEmailAddressList
     *
     * @ElementName notificationEmailAddressList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentThresholdProfileReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil $notificationEmailAddressList
     * @return $this
     */
    public function setNotificationEmailAddressList($notificationEmailAddressList)
    {
        $this->notificationEmailAddressList = $notificationEmailAddressList;
        return $this;
    }

    /**
     * Getter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList($agentUserIdList)
    {
        $this->agentUserIdList = $agentUserIdList;
        return $this;
    }


}

