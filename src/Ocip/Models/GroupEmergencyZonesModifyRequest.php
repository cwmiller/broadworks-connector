<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyRequest
 *
 * Modify the group level data associated with Emergency Zones.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e71c2205fb31894f87810b330a85ede2:191","type":"sequence"}]
 */
class GroupEmergencyZonesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e71c2205fb31894f87810b330a85ede2:191
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e71c2205fb31894f87810b330a85ede2:191
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:191
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName emergencyZonesProhibition
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:191
     * @var \CWM\BroadWorksConnector\Ocip\Models\EmergencyZonesProhibition|null
     */
    private $emergencyZonesProhibition = null;

    /**
     * @ElementName sendEmergencyCallNotifyEmail
     * @Type bool
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:191
     * @var bool|null
     */
    private $sendEmergencyCallNotifyEmail = null;

    /**
     * @ElementName emergencyCallNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:191
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emergencyCallNotifyEmailAddress = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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


}

