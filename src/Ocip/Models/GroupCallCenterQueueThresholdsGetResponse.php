<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueThresholdsGetResponse
 *
 * Response to the GroupCallCenterQueueThresholdsGetRequest.
 *
 * @see GroupCallCenterQueueThresholdsGetRequest
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:5158","type":"sequence"}]
 */
class GroupCallCenterQueueThresholdsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdCurrentCallsInQueueYellow = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdCurrentCallsInQueueRed = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdCurrentLongestWaitingCallYellow = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdCurrentLongestWaitingCallRed = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdAverageEstimatedWaitTimeYellow = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdAverageEstimatedWaitTimeRed = null;

    /**
     * @ElementName thresholdAverageHandlingTimeYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdAverageHandlingTimeYellow = null;

    /**
     * @ElementName thresholdAverageHandlingTimeRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdAverageHandlingTimeRed = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdAverageSpeedOfAnswerYellow = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @Type int
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var int|null
     */
    private $thresholdAverageSpeedOfAnswerRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @Type bool
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:5158
     * @var string[]
     */
    private $notificationEmailAddress = array(
        
    );

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallsInQueueYellow
     *
     * @return int
     */
    public function getThresholdCurrentCallsInQueueYellow()
    {
        return $this->thresholdCurrentCallsInQueueYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallsInQueueYellow;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueYellow
     *
     * @param int $thresholdCurrentCallsInQueueYellow
     * @return $this
     */
    public function setThresholdCurrentCallsInQueueYellow($thresholdCurrentCallsInQueueYellow)
    {
        $this->thresholdCurrentCallsInQueueYellow = $thresholdCurrentCallsInQueueYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentCallsInQueueYellow()
    {
        $this->thresholdCurrentCallsInQueueYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallsInQueueRed
     *
     * @return int
     */
    public function getThresholdCurrentCallsInQueueRed()
    {
        return $this->thresholdCurrentCallsInQueueRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallsInQueueRed;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueRed
     *
     * @param int $thresholdCurrentCallsInQueueRed
     * @return $this
     */
    public function setThresholdCurrentCallsInQueueRed($thresholdCurrentCallsInQueueRed)
    {
        $this->thresholdCurrentCallsInQueueRed = $thresholdCurrentCallsInQueueRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentCallsInQueueRed()
    {
        $this->thresholdCurrentCallsInQueueRed = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentLongestWaitingCallYellow
     *
     * @return int
     */
    public function getThresholdCurrentLongestWaitingCallYellow()
    {
        return $this->thresholdCurrentLongestWaitingCallYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentLongestWaitingCallYellow;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallYellow
     *
     * @param int $thresholdCurrentLongestWaitingCallYellow
     * @return $this
     */
    public function setThresholdCurrentLongestWaitingCallYellow($thresholdCurrentLongestWaitingCallYellow)
    {
        $this->thresholdCurrentLongestWaitingCallYellow = $thresholdCurrentLongestWaitingCallYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentLongestWaitingCallYellow()
    {
        $this->thresholdCurrentLongestWaitingCallYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdCurrentLongestWaitingCallRed
     *
     * @return int
     */
    public function getThresholdCurrentLongestWaitingCallRed()
    {
        return $this->thresholdCurrentLongestWaitingCallRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentLongestWaitingCallRed;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallRed
     *
     * @param int $thresholdCurrentLongestWaitingCallRed
     * @return $this
     */
    public function setThresholdCurrentLongestWaitingCallRed($thresholdCurrentLongestWaitingCallRed)
    {
        $this->thresholdCurrentLongestWaitingCallRed = $thresholdCurrentLongestWaitingCallRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCurrentLongestWaitingCallRed()
    {
        $this->thresholdCurrentLongestWaitingCallRed = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageEstimatedWaitTimeYellow
     *
     * @return int
     */
    public function getThresholdAverageEstimatedWaitTimeYellow()
    {
        return $this->thresholdAverageEstimatedWaitTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageEstimatedWaitTimeYellow;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeYellow
     *
     * @param int $thresholdAverageEstimatedWaitTimeYellow
     * @return $this
     */
    public function setThresholdAverageEstimatedWaitTimeYellow($thresholdAverageEstimatedWaitTimeYellow)
    {
        $this->thresholdAverageEstimatedWaitTimeYellow = $thresholdAverageEstimatedWaitTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageEstimatedWaitTimeYellow()
    {
        $this->thresholdAverageEstimatedWaitTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageEstimatedWaitTimeRed
     *
     * @return int
     */
    public function getThresholdAverageEstimatedWaitTimeRed()
    {
        return $this->thresholdAverageEstimatedWaitTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageEstimatedWaitTimeRed;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeRed
     *
     * @param int $thresholdAverageEstimatedWaitTimeRed
     * @return $this
     */
    public function setThresholdAverageEstimatedWaitTimeRed($thresholdAverageEstimatedWaitTimeRed)
    {
        $this->thresholdAverageEstimatedWaitTimeRed = $thresholdAverageEstimatedWaitTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageEstimatedWaitTimeRed()
    {
        $this->thresholdAverageEstimatedWaitTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageHandlingTimeYellow
     *
     * @return int
     */
    public function getThresholdAverageHandlingTimeYellow()
    {
        return $this->thresholdAverageHandlingTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageHandlingTimeYellow;
    }

    /**
     * Setter for thresholdAverageHandlingTimeYellow
     *
     * @param int $thresholdAverageHandlingTimeYellow
     * @return $this
     */
    public function setThresholdAverageHandlingTimeYellow($thresholdAverageHandlingTimeYellow)
    {
        $this->thresholdAverageHandlingTimeYellow = $thresholdAverageHandlingTimeYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageHandlingTimeYellow()
    {
        $this->thresholdAverageHandlingTimeYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageHandlingTimeRed
     *
     * @return int
     */
    public function getThresholdAverageHandlingTimeRed()
    {
        return $this->thresholdAverageHandlingTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageHandlingTimeRed;
    }

    /**
     * Setter for thresholdAverageHandlingTimeRed
     *
     * @param int $thresholdAverageHandlingTimeRed
     * @return $this
     */
    public function setThresholdAverageHandlingTimeRed($thresholdAverageHandlingTimeRed)
    {
        $this->thresholdAverageHandlingTimeRed = $thresholdAverageHandlingTimeRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageHandlingTimeRed()
    {
        $this->thresholdAverageHandlingTimeRed = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageSpeedOfAnswerYellow
     *
     * @return int
     */
    public function getThresholdAverageSpeedOfAnswerYellow()
    {
        return $this->thresholdAverageSpeedOfAnswerYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageSpeedOfAnswerYellow;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerYellow
     *
     * @param int $thresholdAverageSpeedOfAnswerYellow
     * @return $this
     */
    public function setThresholdAverageSpeedOfAnswerYellow($thresholdAverageSpeedOfAnswerYellow)
    {
        $this->thresholdAverageSpeedOfAnswerYellow = $thresholdAverageSpeedOfAnswerYellow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageSpeedOfAnswerYellow()
    {
        $this->thresholdAverageSpeedOfAnswerYellow = null;
        return $this;
    }

    /**
     * Getter for thresholdAverageSpeedOfAnswerRed
     *
     * @return int
     */
    public function getThresholdAverageSpeedOfAnswerRed()
    {
        return $this->thresholdAverageSpeedOfAnswerRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageSpeedOfAnswerRed;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerRed
     *
     * @param int $thresholdAverageSpeedOfAnswerRed
     * @return $this
     */
    public function setThresholdAverageSpeedOfAnswerRed($thresholdAverageSpeedOfAnswerRed)
    {
        $this->thresholdAverageSpeedOfAnswerRed = $thresholdAverageSpeedOfAnswerRed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdAverageSpeedOfAnswerRed()
    {
        $this->thresholdAverageSpeedOfAnswerRed = null;
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


}

