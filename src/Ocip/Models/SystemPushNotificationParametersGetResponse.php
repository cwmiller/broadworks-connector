<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPushNotificationParametersGetResponse
 *
 * Response to SystemPushNotificationParametersGetRequest.
 *         
 *         The following elements are only used in AS data mode:
 *           subscriptionEventsPerSecond, value "100" is returned in Amplify data mode.
 *           
 *         Contains a list of system push notification parameters.
 *
 * @see SystemPushNotificationParametersGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13007","type":"sequence"}]
 */
class SystemPushNotificationParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enforceAllowedApplicationList
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:13007
     * @var bool|null
     */
    private $enforceAllowedApplicationList = null;

    /**
     * @ElementName maximumRegistrationsPerUser
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13007
     * @var int|null
     */
    private $maximumRegistrationsPerUser = null;

    /**
     * @ElementName maximumRegistrationAgeDays
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13007
     * @var int|null
     */
    private $maximumRegistrationAgeDays = null;

    /**
     * @ElementName newCallTimeout
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13007
     * @var int|null
     */
    private $newCallTimeout = null;

    /**
     * @ElementName subscriptionEventsPerSecond
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13007
     * @var int|null
     */
    private $subscriptionEventsPerSecond = null;

    /**
     * Getter for enforceAllowedApplicationList
     *
     * @return bool
     */
    public function getEnforceAllowedApplicationList()
    {
        return $this->enforceAllowedApplicationList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceAllowedApplicationList;
    }

    /**
     * Setter for enforceAllowedApplicationList
     *
     * @param bool $enforceAllowedApplicationList
     * @return $this
     */
    public function setEnforceAllowedApplicationList($enforceAllowedApplicationList)
    {
        $this->enforceAllowedApplicationList = $enforceAllowedApplicationList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceAllowedApplicationList()
    {
        $this->enforceAllowedApplicationList = null;
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

    /**
     * Getter for maximumRegistrationAgeDays
     *
     * @return int
     */
    public function getMaximumRegistrationAgeDays()
    {
        return $this->maximumRegistrationAgeDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumRegistrationAgeDays;
    }

    /**
     * Setter for maximumRegistrationAgeDays
     *
     * @param int $maximumRegistrationAgeDays
     * @return $this
     */
    public function setMaximumRegistrationAgeDays($maximumRegistrationAgeDays)
    {
        $this->maximumRegistrationAgeDays = $maximumRegistrationAgeDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumRegistrationAgeDays()
    {
        $this->maximumRegistrationAgeDays = null;
        return $this;
    }

    /**
     * Getter for newCallTimeout
     *
     * @return int
     */
    public function getNewCallTimeout()
    {
        return $this->newCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newCallTimeout;
    }

    /**
     * Setter for newCallTimeout
     *
     * @param int $newCallTimeout
     * @return $this
     */
    public function setNewCallTimeout($newCallTimeout)
    {
        $this->newCallTimeout = $newCallTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewCallTimeout()
    {
        $this->newCallTimeout = null;
        return $this;
    }

    /**
     * Getter for subscriptionEventsPerSecond
     *
     * @return int
     */
    public function getSubscriptionEventsPerSecond()
    {
        return $this->subscriptionEventsPerSecond instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriptionEventsPerSecond;
    }

    /**
     * Setter for subscriptionEventsPerSecond
     *
     * @param int $subscriptionEventsPerSecond
     * @return $this
     */
    public function setSubscriptionEventsPerSecond($subscriptionEventsPerSecond)
    {
        $this->subscriptionEventsPerSecond = $subscriptionEventsPerSecond;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriptionEventsPerSecond()
    {
        $this->subscriptionEventsPerSecond = null;
        return $this;
    }


}

