<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingModifyRequest
 *
 * Modifies the system's general routing attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15433","type":"sequence"}]
 */
class SystemRoutingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isRouteRoundRobin
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15433
     * @var bool|null
     */
    protected $isRouteRoundRobin = null;

    /**
     * @ElementName routeTimerSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15433
     * @MinInclusive 1
     * @MaxInclusive 25
     * @var int|null
     */
    protected $routeTimerSeconds = null;

    /**
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15433
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy|null
     */
    protected $dnsResolvedAddressSelectionPolicy = null;

    /**
     * @ElementName statefulExpirationMinutes
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15433
     * @MinInclusive 0
     * @MaxInclusive 1440
     * @var int|null
     */
    protected $statefulExpirationMinutes = null;

    /**
     * @ElementName maxAddressesPerHostname
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15433
     * @MinInclusive 1
     * @MaxInclusive 50
     * @var int|null
     */
    protected $maxAddressesPerHostname = null;

    /**
     * @ElementName maxAddressesDuringSetup
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15433
     * @MinInclusive 1
     * @MaxInclusive 50
     * @var int|null
     */
    protected $maxAddressesDuringSetup = null;

    /**
     * Getter for isRouteRoundRobin
     *
     * @return bool
     */
    public function getIsRouteRoundRobin()
    {
        return $this->isRouteRoundRobin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRouteRoundRobin;
    }

    /**
     * Setter for isRouteRoundRobin
     *
     * @param bool $isRouteRoundRobin
     * @return $this
     */
    public function setIsRouteRoundRobin($isRouteRoundRobin)
    {
        $this->isRouteRoundRobin = $isRouteRoundRobin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRouteRoundRobin()
    {
        $this->isRouteRoundRobin = null;
        return $this;
    }

    /**
     * Getter for routeTimerSeconds
     *
     * @return int
     */
    public function getRouteTimerSeconds()
    {
        return $this->routeTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeTimerSeconds;
    }

    /**
     * Setter for routeTimerSeconds
     *
     * @param int $routeTimerSeconds
     * @return $this
     */
    public function setRouteTimerSeconds($routeTimerSeconds)
    {
        $this->routeTimerSeconds = $routeTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteTimerSeconds()
    {
        $this->routeTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for dnsResolvedAddressSelectionPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy
     */
    public function getDnsResolvedAddressSelectionPolicy()
    {
        return $this->dnsResolvedAddressSelectionPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnsResolvedAddressSelectionPolicy;
    }

    /**
     * Setter for dnsResolvedAddressSelectionPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy $dnsResolvedAddressSelectionPolicy
     * @return $this
     */
    public function setDnsResolvedAddressSelectionPolicy(\CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy $dnsResolvedAddressSelectionPolicy)
    {
        $this->dnsResolvedAddressSelectionPolicy = $dnsResolvedAddressSelectionPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnsResolvedAddressSelectionPolicy()
    {
        $this->dnsResolvedAddressSelectionPolicy = null;
        return $this;
    }

    /**
     * Getter for statefulExpirationMinutes
     *
     * @return int
     */
    public function getStatefulExpirationMinutes()
    {
        return $this->statefulExpirationMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statefulExpirationMinutes;
    }

    /**
     * Setter for statefulExpirationMinutes
     *
     * @param int $statefulExpirationMinutes
     * @return $this
     */
    public function setStatefulExpirationMinutes($statefulExpirationMinutes)
    {
        $this->statefulExpirationMinutes = $statefulExpirationMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatefulExpirationMinutes()
    {
        $this->statefulExpirationMinutes = null;
        return $this;
    }

    /**
     * Getter for maxAddressesPerHostname
     *
     * @return int
     */
    public function getMaxAddressesPerHostname()
    {
        return $this->maxAddressesPerHostname instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAddressesPerHostname;
    }

    /**
     * Setter for maxAddressesPerHostname
     *
     * @param int $maxAddressesPerHostname
     * @return $this
     */
    public function setMaxAddressesPerHostname($maxAddressesPerHostname)
    {
        $this->maxAddressesPerHostname = $maxAddressesPerHostname;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAddressesPerHostname()
    {
        $this->maxAddressesPerHostname = null;
        return $this;
    }

    /**
     * Getter for maxAddressesDuringSetup
     *
     * @return int
     */
    public function getMaxAddressesDuringSetup()
    {
        return $this->maxAddressesDuringSetup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAddressesDuringSetup;
    }

    /**
     * Setter for maxAddressesDuringSetup
     *
     * @param int $maxAddressesDuringSetup
     * @return $this
     */
    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup)
    {
        $this->maxAddressesDuringSetup = $maxAddressesDuringSetup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAddressesDuringSetup()
    {
        $this->maxAddressesDuringSetup = null;
        return $this;
    }


}

