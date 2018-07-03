<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderZoneCallingRestrictionsModifyRequest
 *
 * Modifies the Service Provider/Enterprise level Zone Calling Restrictions
 * Policies.
 *         The response is SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderZoneCallingRestrictionsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enableZoneCallingRestrictions
     * @var bool|null
     */
    private $enableZoneCallingRestrictions = null;

    /**
     * @ElementName enableOriginationRoamingRestrictions
     * @var bool|null
     */
    private $enableOriginationRoamingRestrictions = null;

    /**
     * @ElementName enableEmergencyOriginationRoamingRestrictions
     * @var bool|null
     */
    private $enableEmergencyOriginationRoamingRestrictions = null;

    /**
     * @ElementName enableTerminationRoamingRestrictions
     * @var bool|null
     */
    private $enableTerminationRoamingRestrictions = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for enableZoneCallingRestrictions
     *
     * @ElementName enableZoneCallingRestrictions
     * @return bool|null
     */
    public function getEnableZoneCallingRestrictions()
    {
        return $this->enableZoneCallingRestrictions;
    }

    /**
     * Setter for enableZoneCallingRestrictions
     *
     * @ElementName enableZoneCallingRestrictions
     * @param bool|null $enableZoneCallingRestrictions
     * @return $this
     */
    public function setEnableZoneCallingRestrictions($enableZoneCallingRestrictions)
    {
        $this->enableZoneCallingRestrictions = $enableZoneCallingRestrictions;
        return $this;
    }

    /**
     * Getter for enableOriginationRoamingRestrictions
     *
     * @ElementName enableOriginationRoamingRestrictions
     * @return bool|null
     */
    public function getEnableOriginationRoamingRestrictions()
    {
        return $this->enableOriginationRoamingRestrictions;
    }

    /**
     * Setter for enableOriginationRoamingRestrictions
     *
     * @ElementName enableOriginationRoamingRestrictions
     * @param bool|null $enableOriginationRoamingRestrictions
     * @return $this
     */
    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions)
    {
        $this->enableOriginationRoamingRestrictions = $enableOriginationRoamingRestrictions;
        return $this;
    }

    /**
     * Getter for enableEmergencyOriginationRoamingRestrictions
     *
     * @ElementName enableEmergencyOriginationRoamingRestrictions
     * @return bool|null
     */
    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return $this->enableEmergencyOriginationRoamingRestrictions;
    }

    /**
     * Setter for enableEmergencyOriginationRoamingRestrictions
     *
     * @ElementName enableEmergencyOriginationRoamingRestrictions
     * @param bool|null $enableEmergencyOriginationRoamingRestrictions
     * @return $this
     */
    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions)
    {
        $this->enableEmergencyOriginationRoamingRestrictions = $enableEmergencyOriginationRoamingRestrictions;
        return $this;
    }

    /**
     * Getter for enableTerminationRoamingRestrictions
     *
     * @ElementName enableTerminationRoamingRestrictions
     * @return bool|null
     */
    public function getEnableTerminationRoamingRestrictions()
    {
        return $this->enableTerminationRoamingRestrictions;
    }

    /**
     * Setter for enableTerminationRoamingRestrictions
     *
     * @ElementName enableTerminationRoamingRestrictions
     * @param bool|null $enableTerminationRoamingRestrictions
     * @return $this
     */
    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions)
    {
        $this->enableTerminationRoamingRestrictions = $enableTerminationRoamingRestrictions;
        return $this;
    }


}

