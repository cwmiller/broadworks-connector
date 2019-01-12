<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyCallNotificationGetResponse
 *
 * Response to GroupEmergencyCallNotificationGetRequest.
 *
 * @see GroupEmergencyCallNotificationGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:4659","type":"sequence"}]
 */
class GroupEmergencyCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sendEmergencyCallNotificationEmail
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4659
     * @var bool|null
     */
    private $sendEmergencyCallNotificationEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4659
     * @var string|null
     */
    private $emergencyCallNotifyEmailAddress = null;

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

