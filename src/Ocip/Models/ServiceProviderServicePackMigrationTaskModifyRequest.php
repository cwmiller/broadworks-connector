<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyRequest
 *
 * Modify the properties of a specified service pack migration task.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName newTaskName
     * @var string|null
     */
    private $newTaskName = null;

    /**
     * @ElementName startTimestamp
     * @var string|null
     */
    private $startTimestamp = null;

    /**
     * @ElementName expireAfterNumHours
     * @var int|null
     */
    private $expireAfterNumHours = null;

    /**
     * @ElementName maxDurationHours
     * @var int|null
     */
    private $maxDurationHours = null;

    /**
     * @ElementName sendReportEmail
     * @var bool|null
     */
    private $sendReportEmail = null;

    /**
     * @ElementName reportDeliveryEmailAddress
     * @var string|null
     */
    private $reportDeliveryEmailAddress = null;

    /**
     * @ElementName abortOnError
     * @var bool|null
     */
    private $abortOnError = null;

    /**
     * @ElementName abortErrorThreshold
     * @var int|null
     */
    private $abortErrorThreshold = null;

    /**
     * @ElementName reportAllUsers
     * @var bool|null
     */
    private $reportAllUsers = null;

    /**
     * @ElementName automaticallyIncrementServiceQuantity
     * @var bool|null
     */
    private $automaticallyIncrementServiceQuantity = null;

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
     * Getter for taskName
     *
     * @ElementName taskName
     * @return string|null
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Setter for taskName
     *
     * @ElementName taskName
     * @param string|null $taskName
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * Getter for newTaskName
     *
     * @ElementName newTaskName
     * @return string|null
     */
    public function getNewTaskName()
    {
        return $this->newTaskName;
    }

    /**
     * Setter for newTaskName
     *
     * @ElementName newTaskName
     * @param string|null $newTaskName
     * @return $this
     */
    public function setNewTaskName($newTaskName)
    {
        $this->newTaskName = $newTaskName;
        return $this;
    }

    /**
     * Getter for startTimestamp
     *
     * @ElementName startTimestamp
     * @return string|null
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp;
    }

    /**
     * Setter for startTimestamp
     *
     * @ElementName startTimestamp
     * @param string|null $startTimestamp
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        $this->startTimestamp = $startTimestamp;
        return $this;
    }

    /**
     * Getter for expireAfterNumHours
     *
     * @ElementName expireAfterNumHours
     * @return int|null
     */
    public function getExpireAfterNumHours()
    {
        return $this->expireAfterNumHours;
    }

    /**
     * Setter for expireAfterNumHours
     *
     * @ElementName expireAfterNumHours
     * @param int|null $expireAfterNumHours
     * @return $this
     */
    public function setExpireAfterNumHours($expireAfterNumHours)
    {
        $this->expireAfterNumHours = $expireAfterNumHours;
        return $this;
    }

    /**
     * Getter for maxDurationHours
     *
     * @ElementName maxDurationHours
     * @return int|null
     */
    public function getMaxDurationHours()
    {
        return $this->maxDurationHours;
    }

    /**
     * Setter for maxDurationHours
     *
     * @ElementName maxDurationHours
     * @param int|null $maxDurationHours
     * @return $this
     */
    public function setMaxDurationHours($maxDurationHours)
    {
        $this->maxDurationHours = $maxDurationHours;
        return $this;
    }

    /**
     * Getter for sendReportEmail
     *
     * @ElementName sendReportEmail
     * @return bool|null
     */
    public function getSendReportEmail()
    {
        return $this->sendReportEmail;
    }

    /**
     * Setter for sendReportEmail
     *
     * @ElementName sendReportEmail
     * @param bool|null $sendReportEmail
     * @return $this
     */
    public function setSendReportEmail($sendReportEmail)
    {
        $this->sendReportEmail = $sendReportEmail;
        return $this;
    }

    /**
     * Getter for reportDeliveryEmailAddress
     *
     * @ElementName reportDeliveryEmailAddress
     * @return string|null
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress;
    }

    /**
     * Setter for reportDeliveryEmailAddress
     *
     * @ElementName reportDeliveryEmailAddress
     * @param string|null $reportDeliveryEmailAddress
     * @return $this
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $this->reportDeliveryEmailAddress = $reportDeliveryEmailAddress;
        return $this;
    }

    /**
     * Getter for abortOnError
     *
     * @ElementName abortOnError
     * @return bool|null
     */
    public function getAbortOnError()
    {
        return $this->abortOnError;
    }

    /**
     * Setter for abortOnError
     *
     * @ElementName abortOnError
     * @param bool|null $abortOnError
     * @return $this
     */
    public function setAbortOnError($abortOnError)
    {
        $this->abortOnError = $abortOnError;
        return $this;
    }

    /**
     * Getter for abortErrorThreshold
     *
     * @ElementName abortErrorThreshold
     * @return int|null
     */
    public function getAbortErrorThreshold()
    {
        return $this->abortErrorThreshold;
    }

    /**
     * Setter for abortErrorThreshold
     *
     * @ElementName abortErrorThreshold
     * @param int|null $abortErrorThreshold
     * @return $this
     */
    public function setAbortErrorThreshold($abortErrorThreshold)
    {
        $this->abortErrorThreshold = $abortErrorThreshold;
        return $this;
    }

    /**
     * Getter for reportAllUsers
     *
     * @ElementName reportAllUsers
     * @return bool|null
     */
    public function getReportAllUsers()
    {
        return $this->reportAllUsers;
    }

    /**
     * Setter for reportAllUsers
     *
     * @ElementName reportAllUsers
     * @param bool|null $reportAllUsers
     * @return $this
     */
    public function setReportAllUsers($reportAllUsers)
    {
        $this->reportAllUsers = $reportAllUsers;
        return $this;
    }

    /**
     * Getter for automaticallyIncrementServiceQuantity
     *
     * @ElementName automaticallyIncrementServiceQuantity
     * @return bool|null
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return $this->automaticallyIncrementServiceQuantity;
    }

    /**
     * Setter for automaticallyIncrementServiceQuantity
     *
     * @ElementName automaticallyIncrementServiceQuantity
     * @param bool|null $automaticallyIncrementServiceQuantity
     * @return $this
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity)
    {
        $this->automaticallyIncrementServiceQuantity = $automaticallyIncrementServiceQuantity;
        return $this;
    }


}

