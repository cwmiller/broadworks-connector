<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesGetResponse
 *
 * Response to GroupEmergencyZonesGetRequest.
 *
 * @see GroupEmergencyZonesGetRequest
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:136","type":"sequence"}]
 */
class GroupEmergencyZonesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 993492ea5726d0f3ec8743f5cef40e23:136
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName emergencyZonesProhibition
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition
     * @Group 993492ea5726d0f3ec8743f5cef40e23:136
     * @var \CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition|null
     */
    protected $emergencyZonesProhibition = null;

    /**
     * @ElementName sendEmergencyCallNotifyEmail
     * @Type bool
     * @Group 993492ea5726d0f3ec8743f5cef40e23:136
     * @var bool|null
     */
    protected $sendEmergencyCallNotifyEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group 993492ea5726d0f3ec8743f5cef40e23:136
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $emergencyCallNotifyEmailAddress = null;

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
     * Getter for emergencyZonesProhibition
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition
     */
    public function getEmergencyZonesProhibition()
    {
        return $this->emergencyZonesProhibition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyZonesProhibition;
    }

    /**
     * Setter for emergencyZonesProhibition
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition $emergencyZonesProhibition
     * @return $this
     */
    public function setEmergencyZonesProhibition(\CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition $emergencyZonesProhibition)
    {
        $this->emergencyZonesProhibition = $emergencyZonesProhibition;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyZonesProhibition()
    {
        $this->emergencyZonesProhibition = null;
        return $this;
    }

    /**
     * Getter for sendEmergencyCallNotifyEmail
     *
     * @return bool
     */
    public function getSendEmergencyCallNotifyEmail()
    {
        return $this->sendEmergencyCallNotifyEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendEmergencyCallNotifyEmail;
    }

    /**
     * Setter for sendEmergencyCallNotifyEmail
     *
     * @param bool $sendEmergencyCallNotifyEmail
     * @return $this
     */
    public function setSendEmergencyCallNotifyEmail($sendEmergencyCallNotifyEmail)
    {
        $this->sendEmergencyCallNotifyEmail = $sendEmergencyCallNotifyEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendEmergencyCallNotifyEmail()
    {
        $this->sendEmergencyCallNotifyEmail = null;
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

