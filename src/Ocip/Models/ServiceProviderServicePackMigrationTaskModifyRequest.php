<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyRequest
 *
 * Modify the properties of a specified service pack migration task.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:5487","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName newTaskName
     * @Type string
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var string|null
     */
    private $newTaskName = null;

    /**
     * @ElementName startTimestamp
     * @Type string
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var string|null
     */
    private $startTimestamp = null;

    /**
     * @ElementName expireAfterNumHours
     * @Type int
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var int|null
     */
    private $expireAfterNumHours = null;

    /**
     * @ElementName maxDurationHours
     * @Type int
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var int|null
     */
    private $maxDurationHours = null;

    /**
     * @ElementName sendReportEmail
     * @Type bool
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var bool|null
     */
    private $sendReportEmail = null;

    /**
     * @ElementName reportDeliveryEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reportDeliveryEmailAddress = null;

    /**
     * @ElementName abortOnError
     * @Type bool
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var bool|null
     */
    private $abortOnError = null;

    /**
     * @ElementName abortErrorThreshold
     * @Type int
     * @Nillable
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $abortErrorThreshold = null;

    /**
     * @ElementName reportAllUsers
     * @Type bool
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var bool|null
     */
    private $reportAllUsers = null;

    /**
     * @ElementName automaticallyIncrementServiceQuantity
     * @Type bool
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5487
     * @var bool|null
     */
    private $automaticallyIncrementServiceQuantity = null;

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
     * Getter for taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taskName;
    }

    /**
     * Setter for taskName
     *
     * @param string $taskName
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaskName()
    {
        $this->taskName = null;
        return $this;
    }

    /**
     * Getter for newTaskName
     *
     * @return string
     */
    public function getNewTaskName()
    {
        return $this->newTaskName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newTaskName;
    }

    /**
     * Setter for newTaskName
     *
     * @param string $newTaskName
     * @return $this
     */
    public function setNewTaskName($newTaskName)
    {
        $this->newTaskName = $newTaskName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewTaskName()
    {
        $this->newTaskName = null;
        return $this;
    }

    /**
     * Getter for startTimestamp
     *
     * @return string
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTimestamp;
    }

    /**
     * Setter for startTimestamp
     *
     * @param string $startTimestamp
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        $this->startTimestamp = $startTimestamp;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTimestamp()
    {
        $this->startTimestamp = null;
        return $this;
    }

    /**
     * Getter for expireAfterNumHours
     *
     * @return int
     */
    public function getExpireAfterNumHours()
    {
        return $this->expireAfterNumHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expireAfterNumHours;
    }

    /**
     * Setter for expireAfterNumHours
     *
     * @param int $expireAfterNumHours
     * @return $this
     */
    public function setExpireAfterNumHours($expireAfterNumHours)
    {
        $this->expireAfterNumHours = $expireAfterNumHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpireAfterNumHours()
    {
        $this->expireAfterNumHours = null;
        return $this;
    }

    /**
     * Getter for maxDurationHours
     *
     * @return int
     */
    public function getMaxDurationHours()
    {
        return $this->maxDurationHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxDurationHours;
    }

    /**
     * Setter for maxDurationHours
     *
     * @param int $maxDurationHours
     * @return $this
     */
    public function setMaxDurationHours($maxDurationHours)
    {
        $this->maxDurationHours = $maxDurationHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxDurationHours()
    {
        $this->maxDurationHours = null;
        return $this;
    }

    /**
     * Getter for sendReportEmail
     *
     * @return bool
     */
    public function getSendReportEmail()
    {
        return $this->sendReportEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendReportEmail;
    }

    /**
     * Setter for sendReportEmail
     *
     * @param bool $sendReportEmail
     * @return $this
     */
    public function setSendReportEmail($sendReportEmail)
    {
        $this->sendReportEmail = $sendReportEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendReportEmail()
    {
        $this->sendReportEmail = null;
        return $this;
    }

    /**
     * Getter for reportDeliveryEmailAddress
     *
     * @return string|null
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportDeliveryEmailAddress;
    }

    /**
     * Setter for reportDeliveryEmailAddress
     *
     * @param string|null $reportDeliveryEmailAddress
     * @return $this
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        if ($reportDeliveryEmailAddress === null) {
            $this->reportDeliveryEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reportDeliveryEmailAddress = $reportDeliveryEmailAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportDeliveryEmailAddress()
    {
        $this->reportDeliveryEmailAddress = null;
        return $this;
    }

    /**
     * Getter for abortOnError
     *
     * @return bool
     */
    public function getAbortOnError()
    {
        return $this->abortOnError instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abortOnError;
    }

    /**
     * Setter for abortOnError
     *
     * @param bool $abortOnError
     * @return $this
     */
    public function setAbortOnError($abortOnError)
    {
        $this->abortOnError = $abortOnError;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbortOnError()
    {
        $this->abortOnError = null;
        return $this;
    }

    /**
     * Getter for abortErrorThreshold
     *
     * @return int|null
     */
    public function getAbortErrorThreshold()
    {
        return $this->abortErrorThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abortErrorThreshold;
    }

    /**
     * Setter for abortErrorThreshold
     *
     * @param int|null $abortErrorThreshold
     * @return $this
     */
    public function setAbortErrorThreshold($abortErrorThreshold)
    {
        if ($abortErrorThreshold === null) {
            $this->abortErrorThreshold = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->abortErrorThreshold = $abortErrorThreshold;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbortErrorThreshold()
    {
        $this->abortErrorThreshold = null;
        return $this;
    }

    /**
     * Getter for reportAllUsers
     *
     * @return bool
     */
    public function getReportAllUsers()
    {
        return $this->reportAllUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportAllUsers;
    }

    /**
     * Setter for reportAllUsers
     *
     * @param bool $reportAllUsers
     * @return $this
     */
    public function setReportAllUsers($reportAllUsers)
    {
        $this->reportAllUsers = $reportAllUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportAllUsers()
    {
        $this->reportAllUsers = null;
        return $this;
    }

    /**
     * Getter for automaticallyIncrementServiceQuantity
     *
     * @return bool
     */
    public function getAutomaticallyIncrementServiceQuantity()
    {
        return $this->automaticallyIncrementServiceQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->automaticallyIncrementServiceQuantity;
    }

    /**
     * Setter for automaticallyIncrementServiceQuantity
     *
     * @param bool $automaticallyIncrementServiceQuantity
     * @return $this
     */
    public function setAutomaticallyIncrementServiceQuantity($automaticallyIncrementServiceQuantity)
    {
        $this->automaticallyIncrementServiceQuantity = $automaticallyIncrementServiceQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutomaticallyIncrementServiceQuantity()
    {
        $this->automaticallyIncrementServiceQuantity = null;
        return $this;
    }


}

