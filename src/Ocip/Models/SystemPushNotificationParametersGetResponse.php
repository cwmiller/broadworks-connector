<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPushNotificationParametersGetResponse
 *
 * Response to SystemPushNotificationParametersGetRequest.
 *         
 *         The following elements are only used in AS data mode:
 *           subscriptionEventsPerSecond, value "100" is returned in Amplify data
 * mode.
 *           
 *         Contains a list of system push notification parameters.
 *
 * @see SystemPushNotificationParametersGetRequest
 */
class SystemPushNotificationParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enforceAllowedApplicationList
     * @var bool|null
     */
    private $enforceAllowedApplicationList = null;

    /**
     * @ElementName maximumRegistrationsPerUser
     * @var int|null
     */
    private $maximumRegistrationsPerUser = null;

    /**
     * @ElementName maximumRegistrationAgeDays
     * @var int|null
     */
    private $maximumRegistrationAgeDays = null;

    /**
     * @ElementName newCallTimeout
     * @var int|null
     */
    private $newCallTimeout = null;

    /**
     * @ElementName subscriptionEventsPerSecond
     * @var int|null
     */
    private $subscriptionEventsPerSecond = null;

    /**
     * Getter for enforceAllowedApplicationList
     *
     * @ElementName enforceAllowedApplicationList
     * @return bool|null
     */
    public function getEnforceAllowedApplicationList()
    {
        return $this->enforceAllowedApplicationList;
    }

    /**
     * Setter for enforceAllowedApplicationList
     *
     * @ElementName enforceAllowedApplicationList
     * @param bool|null $enforceAllowedApplicationList
     * @return $this
     */
    public function setEnforceAllowedApplicationList($enforceAllowedApplicationList)
    {
        $this->enforceAllowedApplicationList = $enforceAllowedApplicationList;
        return $this;
    }

    /**
     * Getter for maximumRegistrationsPerUser
     *
     * @ElementName maximumRegistrationsPerUser
     * @return int|null
     */
    public function getMaximumRegistrationsPerUser()
    {
        return $this->maximumRegistrationsPerUser;
    }

    /**
     * Setter for maximumRegistrationsPerUser
     *
     * @ElementName maximumRegistrationsPerUser
     * @param int|null $maximumRegistrationsPerUser
     * @return $this
     */
    public function setMaximumRegistrationsPerUser($maximumRegistrationsPerUser)
    {
        $this->maximumRegistrationsPerUser = $maximumRegistrationsPerUser;
        return $this;
    }

    /**
     * Getter for maximumRegistrationAgeDays
     *
     * @ElementName maximumRegistrationAgeDays
     * @return int|null
     */
    public function getMaximumRegistrationAgeDays()
    {
        return $this->maximumRegistrationAgeDays;
    }

    /**
     * Setter for maximumRegistrationAgeDays
     *
     * @ElementName maximumRegistrationAgeDays
     * @param int|null $maximumRegistrationAgeDays
     * @return $this
     */
    public function setMaximumRegistrationAgeDays($maximumRegistrationAgeDays)
    {
        $this->maximumRegistrationAgeDays = $maximumRegistrationAgeDays;
        return $this;
    }

    /**
     * Getter for newCallTimeout
     *
     * @ElementName newCallTimeout
     * @return int|null
     */
    public function getNewCallTimeout()
    {
        return $this->newCallTimeout;
    }

    /**
     * Setter for newCallTimeout
     *
     * @ElementName newCallTimeout
     * @param int|null $newCallTimeout
     * @return $this
     */
    public function setNewCallTimeout($newCallTimeout)
    {
        $this->newCallTimeout = $newCallTimeout;
        return $this;
    }

    /**
     * Getter for subscriptionEventsPerSecond
     *
     * @ElementName subscriptionEventsPerSecond
     * @return int|null
     */
    public function getSubscriptionEventsPerSecond()
    {
        return $this->subscriptionEventsPerSecond;
    }

    /**
     * Setter for subscriptionEventsPerSecond
     *
     * @ElementName subscriptionEventsPerSecond
     * @param int|null $subscriptionEventsPerSecond
     * @return $this
     */
    public function setSubscriptionEventsPerSecond($subscriptionEventsPerSecond)
    {
        $this->subscriptionEventsPerSecond = $subscriptionEventsPerSecond;
        return $this;
    }


}

