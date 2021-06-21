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
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5765","type":"sequence"}]
 */
class GroupCallCenterQueueThresholdsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 525
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallsInQueueYellow = null;

    /**
     * @ElementName thresholdCurrentCallsInQueueRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 525
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentCallsInQueueRed = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentLongestWaitingCallYellow = null;

    /**
     * @ElementName thresholdCurrentLongestWaitingCallRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdCurrentLongestWaitingCallRed = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageEstimatedWaitTimeYellow = null;

    /**
     * @ElementName thresholdAverageEstimatedWaitTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageEstimatedWaitTimeRed = null;

    /**
     * @ElementName thresholdAverageHandlingTimeYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageHandlingTimeYellow = null;

    /**
     * @ElementName thresholdAverageHandlingTimeRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageHandlingTimeRed = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerYellow
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageSpeedOfAnswerYellow = null;

    /**
     * @ElementName thresholdAverageSpeedOfAnswerRed
     * @Type int
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @MinInclusive 1
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thresholdAverageSpeedOfAnswerRed = null;

    /**
     * @ElementName enableNotificationEmail
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @var bool|null
     */
    private $enableNotificationEmail = null;

    /**
     * @ElementName notificationEmailAddressList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5765
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $notificationEmailAddressList = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

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
     * @return int|null
     */
    public function getThresholdCurrentCallsInQueueYellow()
    {
        return $this->thresholdCurrentCallsInQueueYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallsInQueueYellow;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueYellow
     *
     * @param int|null $thresholdCurrentCallsInQueueYellow
     * @return $this
     */
    public function setThresholdCurrentCallsInQueueYellow($thresholdCurrentCallsInQueueYellow = null)
    {
        if ($thresholdCurrentCallsInQueueYellow === null) {
            $this->thresholdCurrentCallsInQueueYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentCallsInQueueYellow = $thresholdCurrentCallsInQueueYellow;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentCallsInQueueRed()
    {
        return $this->thresholdCurrentCallsInQueueRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentCallsInQueueRed;
    }

    /**
     * Setter for thresholdCurrentCallsInQueueRed
     *
     * @param int|null $thresholdCurrentCallsInQueueRed
     * @return $this
     */
    public function setThresholdCurrentCallsInQueueRed($thresholdCurrentCallsInQueueRed = null)
    {
        if ($thresholdCurrentCallsInQueueRed === null) {
            $this->thresholdCurrentCallsInQueueRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentCallsInQueueRed = $thresholdCurrentCallsInQueueRed;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentLongestWaitingCallYellow()
    {
        return $this->thresholdCurrentLongestWaitingCallYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentLongestWaitingCallYellow;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallYellow
     *
     * @param int|null $thresholdCurrentLongestWaitingCallYellow
     * @return $this
     */
    public function setThresholdCurrentLongestWaitingCallYellow($thresholdCurrentLongestWaitingCallYellow = null)
    {
        if ($thresholdCurrentLongestWaitingCallYellow === null) {
            $this->thresholdCurrentLongestWaitingCallYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentLongestWaitingCallYellow = $thresholdCurrentLongestWaitingCallYellow;
        }
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
     * @return int|null
     */
    public function getThresholdCurrentLongestWaitingCallRed()
    {
        return $this->thresholdCurrentLongestWaitingCallRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCurrentLongestWaitingCallRed;
    }

    /**
     * Setter for thresholdCurrentLongestWaitingCallRed
     *
     * @param int|null $thresholdCurrentLongestWaitingCallRed
     * @return $this
     */
    public function setThresholdCurrentLongestWaitingCallRed($thresholdCurrentLongestWaitingCallRed = null)
    {
        if ($thresholdCurrentLongestWaitingCallRed === null) {
            $this->thresholdCurrentLongestWaitingCallRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdCurrentLongestWaitingCallRed = $thresholdCurrentLongestWaitingCallRed;
        }
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
     * @return int|null
     */
    public function getThresholdAverageEstimatedWaitTimeYellow()
    {
        return $this->thresholdAverageEstimatedWaitTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageEstimatedWaitTimeYellow;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeYellow
     *
     * @param int|null $thresholdAverageEstimatedWaitTimeYellow
     * @return $this
     */
    public function setThresholdAverageEstimatedWaitTimeYellow($thresholdAverageEstimatedWaitTimeYellow = null)
    {
        if ($thresholdAverageEstimatedWaitTimeYellow === null) {
            $this->thresholdAverageEstimatedWaitTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageEstimatedWaitTimeYellow = $thresholdAverageEstimatedWaitTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdAverageEstimatedWaitTimeRed()
    {
        return $this->thresholdAverageEstimatedWaitTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageEstimatedWaitTimeRed;
    }

    /**
     * Setter for thresholdAverageEstimatedWaitTimeRed
     *
     * @param int|null $thresholdAverageEstimatedWaitTimeRed
     * @return $this
     */
    public function setThresholdAverageEstimatedWaitTimeRed($thresholdAverageEstimatedWaitTimeRed = null)
    {
        if ($thresholdAverageEstimatedWaitTimeRed === null) {
            $this->thresholdAverageEstimatedWaitTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageEstimatedWaitTimeRed = $thresholdAverageEstimatedWaitTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdAverageHandlingTimeYellow()
    {
        return $this->thresholdAverageHandlingTimeYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageHandlingTimeYellow;
    }

    /**
     * Setter for thresholdAverageHandlingTimeYellow
     *
     * @param int|null $thresholdAverageHandlingTimeYellow
     * @return $this
     */
    public function setThresholdAverageHandlingTimeYellow($thresholdAverageHandlingTimeYellow = null)
    {
        if ($thresholdAverageHandlingTimeYellow === null) {
            $this->thresholdAverageHandlingTimeYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageHandlingTimeYellow = $thresholdAverageHandlingTimeYellow;
        }
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
     * @return int|null
     */
    public function getThresholdAverageHandlingTimeRed()
    {
        return $this->thresholdAverageHandlingTimeRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageHandlingTimeRed;
    }

    /**
     * Setter for thresholdAverageHandlingTimeRed
     *
     * @param int|null $thresholdAverageHandlingTimeRed
     * @return $this
     */
    public function setThresholdAverageHandlingTimeRed($thresholdAverageHandlingTimeRed = null)
    {
        if ($thresholdAverageHandlingTimeRed === null) {
            $this->thresholdAverageHandlingTimeRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageHandlingTimeRed = $thresholdAverageHandlingTimeRed;
        }
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
     * @return int|null
     */
    public function getThresholdAverageSpeedOfAnswerYellow()
    {
        return $this->thresholdAverageSpeedOfAnswerYellow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageSpeedOfAnswerYellow;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerYellow
     *
     * @param int|null $thresholdAverageSpeedOfAnswerYellow
     * @return $this
     */
    public function setThresholdAverageSpeedOfAnswerYellow($thresholdAverageSpeedOfAnswerYellow = null)
    {
        if ($thresholdAverageSpeedOfAnswerYellow === null) {
            $this->thresholdAverageSpeedOfAnswerYellow = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageSpeedOfAnswerYellow = $thresholdAverageSpeedOfAnswerYellow;
        }
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
     * @return int|null
     */
    public function getThresholdAverageSpeedOfAnswerRed()
    {
        return $this->thresholdAverageSpeedOfAnswerRed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdAverageSpeedOfAnswerRed;
    }

    /**
     * Setter for thresholdAverageSpeedOfAnswerRed
     *
     * @param int|null $thresholdAverageSpeedOfAnswerRed
     * @return $this
     */
    public function setThresholdAverageSpeedOfAnswerRed($thresholdAverageSpeedOfAnswerRed = null)
    {
        if ($thresholdAverageSpeedOfAnswerRed === null) {
            $this->thresholdAverageSpeedOfAnswerRed = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thresholdAverageSpeedOfAnswerRed = $thresholdAverageSpeedOfAnswerRed;
        }
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
     * Getter for notificationEmailAddressList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null
     */
    public function getNotificationEmailAddressList()
    {
        return $this->notificationEmailAddressList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notificationEmailAddressList;
    }

    /**
     * Setter for notificationEmailAddressList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList|null $notificationEmailAddressList
     * @return $this
     */
    public function setNotificationEmailAddressList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueThresholdReplacementNotificationEmailList $notificationEmailAddressList = null)
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


}

