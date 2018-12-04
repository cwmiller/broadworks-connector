<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentThresholdProfileGetResponse
 *
 * Response to the GroupCallCenterAgentThresholdProfileGetRequest.
 *         The agentTable contains the agents assigned to the profile and has the column headings: 
 *         "User Id", "Group Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address";
 *
 * @see GroupCallCenterAgentThresholdProfileGetRequest
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:2140","type":"sequence"}]
 */
class GroupCallCenterAgentThresholdProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileDescription
     * @Type string
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var string|null
     */
    private $profileDescription = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdCurrentCallStateIdleTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateIdleTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdCurrentCallStateIdleTimeRed = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdCurrentCallStateOnCallTimeYellow = null;

    /**
     * @ElementName thresholdCurrentCallStateOnCallTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdCurrentCallStateOnCallTimeRed = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdCurrentAgentStateUnavailableTimeYellow = null;

    /**
     * @ElementName thresholdCurrentAgentStateUnavailableTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdCurrentAgentStateUnavailableTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyInTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdAverageBusyInTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyInTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdAverageBusyInTimeRed = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdAverageBusyOutTimeYellow = null;

    /**
     * @ElementName thresholdAverageBusyOutTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdAverageBusyOutTimeRed = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdAverageWrapUpTimeYellow = null;

    /**
     * @ElementName thresholdAverageWrapUpTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var int|null
     */
    private $thresholdAverageWrapUpTimeRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @Type bool
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var string[]
     */
    private $notificationEmailAddress = array(
        
    );

    /**
     * @ElementName agentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2140
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentTable = null;

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
     * Getter for agentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentTable()
    {
        return $this->agentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentTable;
    }

    /**
     * Setter for agentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable
     * @return $this
     */
    public function setAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentTable()
    {
        $this->agentTable = null;
        return $this;
    }


}

