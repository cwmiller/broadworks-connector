<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyCallNotificationGetResponse
 *
 * Response to GroupEmergencyCallNotificationGetRequest.
 *
 * @see GroupEmergencyCallNotificationGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5293","type":"sequence"}]
 */
class GroupEmergencyCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sendEmergencyCallNotificationEmail
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:5293
     * @var bool|null
     */
    protected $sendEmergencyCallNotificationEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5293
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $emergencyCallNotifyEmailAddress = null;

    /**
     * Getter for sendEmergencyCallNotificationEmail
     *
     * @return bool
     */
    public function getSendEmergencyCallNotificationEmail()
    {
        return $this->sendEmergencyCallNotificationEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendEmergencyCallNotificationEmail;
    }

    /**
     * Setter for sendEmergencyCallNotificationEmail
     *
     * @param bool $sendEmergencyCallNotificationEmail
     * @return $this
     */
    public function setSendEmergencyCallNotificationEmail($sendEmergencyCallNotificationEmail)
    {
        $this->sendEmergencyCallNotificationEmail = $sendEmergencyCallNotificationEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendEmergencyCallNotificationEmail()
    {
        $this->sendEmergencyCallNotificationEmail = null;
        return $this;
    }

    /**
     * Getter for emergencyCallNotifyEmailAddress
     *
     * @return string
     */
    public function getEmergencyCallNotifyEmailAddress()
    {
        return $this->emergencyCallNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallNotifyEmailAddress;
    }

    /**
     * Setter for emergencyCallNotifyEmailAddress
     *
     * @param string $emergencyCallNotifyEmailAddress
     * @return $this
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress)
    {
        $this->emergencyCallNotifyEmailAddress = $emergencyCallNotifyEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyCallNotifyEmailAddress()
    {
        $this->emergencyCallNotifyEmailAddress = null;
        return $this;
    }
}

