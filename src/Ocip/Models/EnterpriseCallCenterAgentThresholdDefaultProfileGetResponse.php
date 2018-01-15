<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdDefaultProfileGetResponse
 *
 * Response to the EnterpriseCallCenterAgentThresholdDefaultProfileGetRequest.
 *         The agent table contains the agents assigned to the profile and 
 *         has column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address";
 */
class EnterpriseCallCenterAgentThresholdDefaultProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileName
     * @var string|null
     */
    private $profileName = null;

    /**
     * @ElementName profileDescription
     * @var string|null
     */
    private $profileDescription = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @var int|null
     */
    private $thresholdCurrentCallStateIdleTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @var int|null
     */
    private $thresholdCurrentCallStateIdleTimeRed = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @var int|null
     */
    private $thresholdCurrentCallStateOnCallTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @var int|null
     */
    private $thresholdCurrentCallStateOnCallTimeRed = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @var int|null
     */
    private $thresholdCurrentAgentStateUnavailableTimeYellow = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @var int|null
     */
    private $thresholdCurrentAgentStateUnavailableTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyInTimeYellow
     * @var int|null
     */
    private $thresholdAverageBusyInTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyInTimeRed
     * @var int|null
     */
    private $thresholdAverageBusyInTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @var int|null
     */
    private $thresholdAverageBusyOutTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeRed
     * @var int|null
     */
    private $thresholdAverageBusyOutTimeRed = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @var int|null
     */
    private $thresholdAverageWrapUpTimeYellow = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeRed
     * @var int|null
     */
    private $thresholdAverageWrapUpTimeRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddress
     * @var string[]
     */
    private $notificationEmailAddress = array(
        
    );

    /**
     * @ElementName agentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentTable = null;

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
     * Getter for profileDescription
     *
     * @ElementName profileDescription
     * @return string|null
     */
    public function getProfileDescription()
    {
        return $this->profileDescription;
    }

    /**
     * Setter for profileDescription
     *
     * @ElementName profileDescription
     * @param string|null $profileDescription
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateIdleTimeYellow()
    {
        return $this->thresholdCurrentCallStateIdleTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeYellow
     *
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @param int|null $thresholdCurrentCallStateIdleTimeYellow
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateIdleTimeRed()
    {
        return $this->thresholdCurrentCallStateIdleTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateIdleTimeRed
     *
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @param int|null $thresholdCurrentCallStateIdleTimeRed
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateOnCallTimeYellow()
    {
        return $this->thresholdCurrentCallStateOnCallTimeYellow;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeYellow
     *
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @param int|null $thresholdCurrentCallStateOnCallTimeYellow
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
     * @return int|null
     */
    public function getThresholdCurrentCallStateOnCallTimeRed()
    {
        return $this->thresholdCurrentCallStateOnCallTimeRed;
    }

    /**
     * Setter for thresholdCurrentCallStateOnCallTimeRed
     *
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @param int|null $thresholdCurrentCallStateOnCallTimeRed
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
     * @return int|null
     */
    public function getThresholdCurrentAgentStateUnavailableTimeYellow()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeYellow;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeYellow
     *
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @param int|null $thresholdCurrentAgentStateUnavailableTimeYellow
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
     * @return int|null
     */
    public function getThresholdCurrentAgentStateUnavailableTimeRed()
    {
        return $this->thresholdCurrentAgentStateUnavailableTimeRed;
    }

    /**
     * Setter for thresholdCurrentAgentStateUnavailableTimeRed
     *
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @param int|null $thresholdCurrentAgentStateUnavailableTimeRed
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
     * @return int|null
     */
    public function getThresholdAverageBusyInTimeYellow()
    {
        return $this->thresholdAverageBusyInTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyInTimeYellow
     *
     * @ElementName thresholdAverageBusyInTimeYellow
     * @param int|null $thresholdAverageBusyInTimeYellow
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
     * @return int|null
     */
    public function getThresholdAverageBusyInTimeRed()
    {
        return $this->thresholdAverageBusyInTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyInTimeRed
     *
     * @ElementName thresholdAverageBusyInTimeRed
     * @param int|null $thresholdAverageBusyInTimeRed
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
     * @return int|null
     */
    public function getThresholdAverageBusyOutTimeYellow()
    {
        return $this->thresholdAverageBusyOutTimeYellow;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeYellow
     *
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @param int|null $thresholdAverageBusyOutTimeYellow
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
     * @return int|null
     */
    public function getThresholdAverageBusyOutTimeRed()
    {
        return $this->thresholdAverageBusyOutTimeRed;
    }

    /**
     * Setter for thresholdAverageBusyOutTimeRed
     *
     * @ElementName thresholdAverageBusyOutTimeRed
     * @param int|null $thresholdAverageBusyOutTimeRed
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
     * @return int|null
     */
    public function getThresholdAverageWrapUpTimeYellow()
    {
        return $this->thresholdAverageWrapUpTimeYellow;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeYellow
     *
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @param int|null $thresholdAverageWrapUpTimeYellow
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
     * @return int|null
     */
    public function getThresholdAverageWrapUpTimeRed()
    {
        return $this->thresholdAverageWrapUpTimeRed;
    }

    /**
     * Setter for thresholdAverageWrapUpTimeRed
     *
     * @ElementName thresholdAverageWrapUpTimeRed
     * @param int|null $thresholdAverageWrapUpTimeRed
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
     * Getter for notificationEmailAddress
     *
     * @ElementName notificationEmailAddress
     * @return string[]
     */
    public function getNotificationEmailAddress()
    {
        return $this->notificationEmailAddress;
    }

    /**
     * Setter for notificationEmailAddress
     *
     * @ElementName notificationEmailAddress
     * @param string[] $notificationEmailAddress
     * @return $this
     */
    public function setNotificationEmailAddress($notificationEmailAddress)
    {
        $this->notificationEmailAddress = $notificationEmailAddress;
        return $this;
    }

    /**
     * Adder for notificationEmailAddress
     *
     * @ElementName notificationEmailAddress
     * @param string $notificationEmailAddress
     * @return $this
     */
    public function addNotificationEmailAddress($notificationEmailAddress)
    {
        $this->notificationEmailAddress []= $notificationEmailAddress;
        return $this;
    }

    /**
     * Getter for agentTable
     *
     * @ElementName agentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAgentTable()
    {
        return $this->agentTable;
    }

    /**
     * Setter for agentTable
     *
     * @ElementName agentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $agentTable
     * @return $this
     */
    public function setAgentTable($agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }


}

