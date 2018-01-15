<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueThresholdsModifyRequest
 *
 * Modify a call center's queue Thresholds settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueThresholdsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueYellow
     * @var int|null
     */
    private $thresholdCurrentCallsInQueueYellow = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueRed
     * @var int|null
     */
    private $thresholdCurrentCallsInQueueRed = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @var int|null
     */
    private $thresholdCurrentLongestWaitingCallYellow = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @var int|null
     */
    private $thresholdCurrentLongestWaitingCallRed = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @var int|null
     */
    private $thresholdAverageEstimatedWaitTimeYellow = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @var int|null
     */
    private $thresholdAverageEstimatedWaitTimeRed = null;

    /**
     * @ElementName thresholdAverageHandlingTimeYellow
     * @var int|null
     */
    private $thresholdAverageHandlingTimeYellow = null;

    /**
     * @ElementName thresholdAverageHandlingTimeRed
     * @var int|null
     */
    private $thresholdAverageHandlingTimeRed = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @var int|null
     */
    private $thresholdAverageSpeedOfAnswerYellow = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @var int|null
     */
    private $thresholdAverageSpeedOfAnswerRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddressList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null
     */
    private $notificationEmailAddressList = null;

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
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallsInQueueYellow
     *
     * @ElementName thresholdCurrentCallsInQueueYellow
     * @return int|null
     */
    public function getThresholdCurrentCallsInQueueYellow()
    {
        return $this->thresholdCurrentCallsInQueueYellow;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueYellow
     *
     * @ElementName thresholdCurrentCallsInQueueYellow
     * @param int|null $thresholdCurrentCallsInQueueYellow
     * @return $this
     */
    public function setThresholdCurrentCallsInQueueYellow($thresholdCurrentCallsInQueueYellow)
    {
        $this->thresholdCurrentCallsInQueueYellow = $thresholdCurrentCallsInQueueYellow;
        return $this;
    }

    /**
     * Getter for thresholdCurrentCallsInQueueRed
     *
     * @ElementName thresholdCurrentCallsInQueueRed
     * @return int|null
     */
    public function getThresholdCurrentCallsInQueueRed()
    {
        return $this->thresholdCurrentCallsInQueueRed;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueRed
     *
     * @ElementName thresholdCurrentCallsInQueueRed
     * @param int|null $thresholdCurrentCallsInQueueRed
     * @return $this
     */
    public function setThresholdCurrentCallsInQueueRed($thresholdCurrentCallsInQueueRed)
    {
        $this->thresholdCurrentCallsInQueueRed = $thresholdCurrentCallsInQueueRed;
        return $this;
    }

    /**
     * Getter for thresholdCurrentLongestWaitingCallYellow
     *
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @return int|null
     */
    public function getThresholdCurrentLongestWaitingCallYellow()
    {
        return $this->thresholdCurrentLongestWaitingCallYellow;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallYellow
     *
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @param int|null $thresholdCurrentLongestWaitingCallYellow
     * @return $this
     */
    public function setThresholdCurrentLongestWaitingCallYellow($thresholdCurrentLongestWaitingCallYellow)
    {
        $this->thresholdCurrentLongestWaitingCallYellow = $thresholdCurrentLongestWaitingCallYellow;
        return $this;
    }

    /**
     * Getter for thresholdCurrentLongestWaitingCallRed
     *
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @return int|null
     */
    public function getThresholdCurrentLongestWaitingCallRed()
    {
        return $this->thresholdCurrentLongestWaitingCallRed;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallRed
     *
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @param int|null $thresholdCurrentLongestWaitingCallRed
     * @return $this
     */
    public function setThresholdCurrentLongestWaitingCallRed($thresholdCurrentLongestWaitingCallRed)
    {
        $this->thresholdCurrentLongestWaitingCallRed = $thresholdCurrentLongestWaitingCallRed;
        return $this;
    }

    /**
     * Getter for thresholdAverageEstimatedWaitTimeYellow
     *
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @return int|null
     */
    public function getThresholdAverageEstimatedWaitTimeYellow()
    {
        return $this->thresholdAverageEstimatedWaitTimeYellow;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeYellow
     *
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @param int|null $thresholdAverageEstimatedWaitTimeYellow
     * @return $this
     */
    public function setThresholdAverageEstimatedWaitTimeYellow($thresholdAverageEstimatedWaitTimeYellow)
    {
        $this->thresholdAverageEstimatedWaitTimeYellow = $thresholdAverageEstimatedWaitTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdAverageEstimatedWaitTimeRed
     *
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @return int|null
     */
    public function getThresholdAverageEstimatedWaitTimeRed()
    {
        return $this->thresholdAverageEstimatedWaitTimeRed;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeRed
     *
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @param int|null $thresholdAverageEstimatedWaitTimeRed
     * @return $this
     */
    public function setThresholdAverageEstimatedWaitTimeRed($thresholdAverageEstimatedWaitTimeRed)
    {
        $this->thresholdAverageEstimatedWaitTimeRed = $thresholdAverageEstimatedWaitTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdAverageHandlingTimeYellow
     *
     * @ElementName thresholdAverageHandlingTimeYellow
     * @return int|null
     */
    public function getThresholdAverageHandlingTimeYellow()
    {
        return $this->thresholdAverageHandlingTimeYellow;
    }

    /**
     * Setter for thresholdAverageHandlingTimeYellow
     *
     * @ElementName thresholdAverageHandlingTimeYellow
     * @param int|null $thresholdAverageHandlingTimeYellow
     * @return $this
     */
    public function setThresholdAverageHandlingTimeYellow($thresholdAverageHandlingTimeYellow)
    {
        $this->thresholdAverageHandlingTimeYellow = $thresholdAverageHandlingTimeYellow;
        return $this;
    }

    /**
     * Getter for thresholdAverageHandlingTimeRed
     *
     * @ElementName thresholdAverageHandlingTimeRed
     * @return int|null
     */
    public function getThresholdAverageHandlingTimeRed()
    {
        return $this->thresholdAverageHandlingTimeRed;
    }

    /**
     * Setter for thresholdAverageHandlingTimeRed
     *
     * @ElementName thresholdAverageHandlingTimeRed
     * @param int|null $thresholdAverageHandlingTimeRed
     * @return $this
     */
    public function setThresholdAverageHandlingTimeRed($thresholdAverageHandlingTimeRed)
    {
        $this->thresholdAverageHandlingTimeRed = $thresholdAverageHandlingTimeRed;
        return $this;
    }

    /**
     * Getter for thresholdAverageSpeedOfAnswerYellow
     *
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @return int|null
     */
    public function getThresholdAverageSpeedOfAnswerYellow()
    {
        return $this->thresholdAverageSpeedOfAnswerYellow;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerYellow
     *
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @param int|null $thresholdAverageSpeedOfAnswerYellow
     * @return $this
     */
    public function setThresholdAverageSpeedOfAnswerYellow($thresholdAverageSpeedOfAnswerYellow)
    {
        $this->thresholdAverageSpeedOfAnswerYellow = $thresholdAverageSpeedOfAnswerYellow;
        return $this;
    }

    /**
     * Getter for thresholdAverageSpeedOfAnswerRed
     *
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @return int|null
     */
    public function getThresholdAverageSpeedOfAnswerRed()
    {
        return $this->thresholdAverageSpeedOfAnswerRed;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerRed
     *
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @param int|null $thresholdAverageSpeedOfAnswerRed
     * @return $this
     */
    public function setThresholdAverageSpeedOfAnswerRed($thresholdAverageSpeedOfAnswerRed)
    {
        $this->thresholdAverageSpeedOfAnswerRed = $thresholdAverageSpeedOfAnswerRed;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null
     */
    public function getNotificationEmailAddressList()
    {
        return $this->notificationEmailAddressList;
    }

    /**
     * Setter for notificationEmailAddressList
     *
     * @ElementName notificationEmailAddressList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null $notificationEmailAddressList
     * @return $this
     */
    public function setNotificationEmailAddressList($notificationEmailAddressList)
    {
        $this->notificationEmailAddressList = $notificationEmailAddressList;
        return $this;
    }


}

