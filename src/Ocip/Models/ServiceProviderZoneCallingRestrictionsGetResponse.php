<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderZoneCallingRestrictionsGetResponse
 *
 * Response to ServiceProviderZoneCallingRestrictionsGetRequest
 *
 * @see ServiceProviderZoneCallingRestrictionsGetRequest
 * @Groups [{"id":"1d57523802a1435faa76c4035da1e4dc:61","type":"sequence"}]
 */
class ServiceProviderZoneCallingRestrictionsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableZoneCallingRestrictions
     * @Type bool
     * @Group 1d57523802a1435faa76c4035da1e4dc:61
     * @var bool|null
     */
    protected $enableZoneCallingRestrictions = null;

    /**
     * @ElementName enableOriginationRoamingRestrictions
     * @Type bool
     * @Group 1d57523802a1435faa76c4035da1e4dc:61
     * @var bool|null
     */
    protected $enableOriginationRoamingRestrictions = null;

    /**
     * @ElementName enableEmergencyOriginationRoamingRestrictions
     * @Type bool
     * @Group 1d57523802a1435faa76c4035da1e4dc:61
     * @var bool|null
     */
    protected $enableEmergencyOriginationRoamingRestrictions = null;

    /**
     * @ElementName enableTerminationRoamingRestrictions
     * @Type bool
     * @Group 1d57523802a1435faa76c4035da1e4dc:61
     * @var bool|null
     */
    protected $enableTerminationRoamingRestrictions = null;

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

