<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEmergencyCallNotificationGetResponse
 *
 * Response to ServiceProviderEmergencyCallNotificationGetRequest.
 *
 * @see ServiceProviderEmergencyCallNotificationGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4135","type":"sequence"}]
 */
class ServiceProviderEmergencyCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sendEmergencyCallNotificationEmail
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:4135
     * @var bool|null
     */
    protected $sendEmergencyCallNotificationEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4135
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $emergencyCallNotifyEmailAddress = null;

    /**
     * @ElementName allowGroupOverride
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:4135
     * @var bool|null
     */
    protected $allowGroupOverride = null;

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

    /**
     * Getter for allowGroupOverride
     *
     * @return bool
     */
    public function getAllowGroupOverride()
    {
        return $this->allowGroupOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowGroupOverride;
    }

    /**
     * Setter for allowGroupOverride
     *
     * @param bool $allowGroupOverride
     * @return $this
     */
    public function setAllowGroupOverride($allowGroupOverride)
    {
        $this->allowGroupOverride = $allowGroupOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowGroupOverride()
    {
        $this->allowGroupOverride = null;
        return $this;
    }
}

