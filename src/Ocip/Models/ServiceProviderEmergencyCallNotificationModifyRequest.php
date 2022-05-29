<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEmergencyCallNotificationModifyRequest
 *
 * Modify the service provider or enterprise level data associated with Emergency 
 *         Call Notification.  The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4074","type":"sequence"}]
 */
class ServiceProviderEmergencyCallNotificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4074
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName sendEmergencyCallNotificationEmail
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4074
     * @var bool|null
     */
    protected $sendEmergencyCallNotificationEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4074
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $emergencyCallNotifyEmailAddress = null;

    /**
     * @ElementName allowGroupOverride
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4074
     * @var bool|null
     */
    protected $allowGroupOverride = null;

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
     * @return string|null
     */
    public function getEmergencyCallNotifyEmailAddress()
    {
        return $this->emergencyCallNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallNotifyEmailAddress;
    }

    /**
     * Setter for emergencyCallNotifyEmailAddress
     *
     * @param string|null $emergencyCallNotifyEmailAddress
     * @return $this
     */
    public function setEmergencyCallNotifyEmailAddress($emergencyCallNotifyEmailAddress = null)
    {
        if ($emergencyCallNotifyEmailAddress === null) {
            $this->emergencyCallNotifyEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emergencyCallNotifyEmailAddress = $emergencyCallNotifyEmailAddress;
        }
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

