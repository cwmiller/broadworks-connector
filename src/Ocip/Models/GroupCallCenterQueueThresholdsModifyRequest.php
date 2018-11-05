<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueThresholdsModifyRequest
 *
 * Modify a call center's queue Thresholds settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
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
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallsInQueueYellow = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallsInQueueRed = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentLongestWaitingCallYellow = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentLongestWaitingCallRed = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageEstimatedWaitTimeYellow = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageEstimatedWaitTimeRed = null;

    /**
     * @ElementName thresholdAverageHandlingTimeYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageHandlingTimeYellow = null;

    /**
     * @ElementName thresholdAverageHandlingTimeRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageHandlingTimeRed = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageSpeedOfAnswerYellow = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageSpeedOfAnswerRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddressList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentCallsInQueueYellow()
    {
        return $this->thresholdCurrentCallsInQueueYellow;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueYellow
     *
     * @ElementName thresholdCurrentCallsInQueueYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentCallsInQueueYellow
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentCallsInQueueRed()
    {
        return $this->thresholdCurrentCallsInQueueRed;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueRed
     *
     * @ElementName thresholdCurrentCallsInQueueRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentCallsInQueueRed
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentLongestWaitingCallYellow()
    {
        return $this->thresholdCurrentLongestWaitingCallYellow;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallYellow
     *
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentLongestWaitingCallYellow
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdCurrentLongestWaitingCallRed()
    {
        return $this->thresholdCurrentLongestWaitingCallRed;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallRed
     *
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdCurrentLongestWaitingCallRed
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageEstimatedWaitTimeYellow()
    {
        return $this->thresholdAverageEstimatedWaitTimeYellow;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeYellow
     *
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageEstimatedWaitTimeYellow
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageEstimatedWaitTimeRed()
    {
        return $this->thresholdAverageEstimatedWaitTimeRed;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeRed
     *
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageEstimatedWaitTimeRed
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageHandlingTimeYellow()
    {
        return $this->thresholdAverageHandlingTimeYellow;
    }

    /**
     * Setter for thresholdAverageHandlingTimeYellow
     *
     * @ElementName thresholdAverageHandlingTimeYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageHandlingTimeYellow
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageHandlingTimeRed()
    {
        return $this->thresholdAverageHandlingTimeRed;
    }

    /**
     * Setter for thresholdAverageHandlingTimeRed
     *
     * @ElementName thresholdAverageHandlingTimeRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageHandlingTimeRed
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageSpeedOfAnswerYellow()
    {
        return $this->thresholdAverageSpeedOfAnswerYellow;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerYellow
     *
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageSpeedOfAnswerYellow
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getThresholdAverageSpeedOfAnswerRed()
    {
        return $this->thresholdAverageSpeedOfAnswerRed;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerRed
     *
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $thresholdAverageSpeedOfAnswerRed
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil $notificationEmailAddressList
     * @return $this
     */
    public function setNotificationEmailAddressList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList $notificationEmailAddressList)
    {
        $this->notificationEmailAddressList = $notificationEmailAddressList;
        return $this;
    }


}

