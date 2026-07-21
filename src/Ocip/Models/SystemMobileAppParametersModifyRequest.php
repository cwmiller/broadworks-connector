<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMobileAppParametersModifyRequest
 *
 * Request to modify mobile app system parameters.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12587","type":"sequence"}]
 */
class SystemMobileAppParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName maximumRegistrationTtlInMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12587
     * @MinInclusive 1
     * @MaxInclusive 172800
     * @var int|null
     */
    protected $maximumRegistrationTtlInMinutes = null;

    /**
     * @ElementName callNotificationTimeoutInSeconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12587
     * @MinInclusive 1
     * @MaxInclusive 180
     * @var int|null
     */
    protected $callNotificationTimeoutInSeconds = null;

    /**
     * @ElementName maximumRegistrationsPerUser
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12587
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maximumRegistrationsPerUser = null;

    /**
     * Getter for maximumRegistrationTtlInMinutes
     *
     * @return int
     */
    public function getMaximumRegistrationTtlInMinutes()
    {
        return $this->maximumRegistrationTtlInMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumRegistrationTtlInMinutes;
    }

    /**
     * Setter for maximumRegistrationTtlInMinutes
     *
     * @param int $maximumRegistrationTtlInMinutes
     * @return $this
     */
    public function setMaximumRegistrationTtlInMinutes($maximumRegistrationTtlInMinutes)
    {
        $this->maximumRegistrationTtlInMinutes = $maximumRegistrationTtlInMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumRegistrationTtlInMinutes()
    {
        $this->maximumRegistrationTtlInMinutes = null;
        return $this;
    }

    /**
     * Getter for callNotificationTimeoutInSeconds
     *
     * @return int
     */
    public function getCallNotificationTimeoutInSeconds()
    {
        return $this->callNotificationTimeoutInSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callNotificationTimeoutInSeconds;
    }

    /**
     * Setter for callNotificationTimeoutInSeconds
     *
     * @param int $callNotificationTimeoutInSeconds
     * @return $this
     */
    public function setCallNotificationTimeoutInSeconds($callNotificationTimeoutInSeconds)
    {
        $this->callNotificationTimeoutInSeconds = $callNotificationTimeoutInSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallNotificationTimeoutInSeconds()
    {
        $this->callNotificationTimeoutInSeconds = null;
        return $this;
    }

    /**
     * Getter for maximumRegistrationsPerUser
     *
     * @return int
     */
    public function getMaximumRegistrationsPerUser()
    {
        return $this->maximumRegistrationsPerUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumRegistrationsPerUser;
    }

    /**
     * Setter for maximumRegistrationsPerUser
     *
     * @param int $maximumRegistrationsPerUser
     * @return $this
     */
    public function setMaximumRegistrationsPerUser($maximumRegistrationsPerUser)
    {
        $this->maximumRegistrationsPerUser = $maximumRegistrationsPerUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumRegistrationsPerUser()
    {
        $this->maximumRegistrationsPerUser = null;
        return $this;
    }
}

