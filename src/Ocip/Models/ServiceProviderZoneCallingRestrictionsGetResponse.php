<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderZoneCallingRestrictionsGetResponse
 *
 * Response to ServiceProviderZoneCallingRestrictionsGetRequest
 */
class ServiceProviderZoneCallingRestrictionsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

