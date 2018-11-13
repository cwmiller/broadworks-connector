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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enableZoneCallingRestrictions
     * @Type bool
     * @var bool|null
     */
    private $enableZoneCallingRestrictions = null;

    /**
     * @ElementName enableOriginationRoamingRestrictions
     * @Type bool
     * @var bool|null
     */
    private $enableOriginationRoamingRestrictions = null;

    /**
     * @ElementName enableEmergencyOriginationRoamingRestrictions
     * @Type bool
     * @var bool|null
     */
    private $enableEmergencyOriginationRoamingRestrictions = null;

    /**
     * @ElementName enableTerminationRoamingRestrictions
     * @Type bool
     * @var bool|null
     */
    private $enableTerminationRoamingRestrictions = null;

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
     * Getter for enableZoneCallingRestrictions
     *
     * @return bool
     */
    public function getEnableZoneCallingRestrictions()
    {
        return $this->enableZoneCallingRestrictions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableZoneCallingRestrictions;
    }

    /**
     * Setter for enableZoneCallingRestrictions
     *
     * @param bool $enableZoneCallingRestrictions
     * @return $this
     */
    public function setEnableZoneCallingRestrictions($enableZoneCallingRestrictions)
    {
        $this->enableZoneCallingRestrictions = $enableZoneCallingRestrictions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableZoneCallingRestrictions()
    {
        $this->enableZoneCallingRestrictions = null;
        return $this;
    }

    /**
     * Getter for enableOriginationRoamingRestrictions
     *
     * @return bool
     */
    public function getEnableOriginationRoamingRestrictions()
    {
        return $this->enableOriginationRoamingRestrictions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableOriginationRoamingRestrictions;
    }

    /**
     * Setter for enableOriginationRoamingRestrictions
     *
     * @param bool $enableOriginationRoamingRestrictions
     * @return $this
     */
    public function setEnableOriginationRoamingRestrictions($enableOriginationRoamingRestrictions)
    {
        $this->enableOriginationRoamingRestrictions = $enableOriginationRoamingRestrictions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableOriginationRoamingRestrictions()
    {
        $this->enableOriginationRoamingRestrictions = null;
        return $this;
    }

    /**
     * Getter for enableEmergencyOriginationRoamingRestrictions
     *
     * @return bool
     */
    public function getEnableEmergencyOriginationRoamingRestrictions()
    {
        return $this->enableEmergencyOriginationRoamingRestrictions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEmergencyOriginationRoamingRestrictions;
    }

    /**
     * Setter for enableEmergencyOriginationRoamingRestrictions
     *
     * @param bool $enableEmergencyOriginationRoamingRestrictions
     * @return $this
     */
    public function setEnableEmergencyOriginationRoamingRestrictions($enableEmergencyOriginationRoamingRestrictions)
    {
        $this->enableEmergencyOriginationRoamingRestrictions = $enableEmergencyOriginationRoamingRestrictions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEmergencyOriginationRoamingRestrictions()
    {
        $this->enableEmergencyOriginationRoamingRestrictions = null;
        return $this;
    }

    /**
     * Getter for enableTerminationRoamingRestrictions
     *
     * @return bool
     */
    public function getEnableTerminationRoamingRestrictions()
    {
        return $this->enableTerminationRoamingRestrictions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTerminationRoamingRestrictions;
    }

    /**
     * Setter for enableTerminationRoamingRestrictions
     *
     * @param bool $enableTerminationRoamingRestrictions
     * @return $this
     */
    public function setEnableTerminationRoamingRestrictions($enableTerminationRoamingRestrictions)
    {
        $this->enableTerminationRoamingRestrictions = $enableTerminationRoamingRestrictions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTerminationRoamingRestrictions()
    {
        $this->enableTerminationRoamingRestrictions = null;
        return $this;
    }


}

