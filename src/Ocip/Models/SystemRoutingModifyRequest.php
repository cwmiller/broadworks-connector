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
 */
class SystemRoutingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isRouteRoundRobin
     * @var bool|null
     */
    private $isRouteRoundRobin = null;

    /**
     * @ElementName routeTimerSeconds
     * @var int|null
     */
    private $routeTimerSeconds = null;

    /**
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy|null
     */
    private $dnsResolvedAddressSelectionPolicy = null;

    /**
     * @ElementName statefulExpirationMinutes
     * @var int|null
     */
    private $statefulExpirationMinutes = null;

    /**
     * @ElementName maxAddressesPerHostname
     * @var int|null
     */
    private $maxAddressesPerHostname = null;

    /**
     * @ElementName maxAddressesDuringSetup
     * @var int|null
     */
    private $maxAddressesDuringSetup = null;

    /**
     * Getter for isRouteRoundRobin
     *
     * @ElementName isRouteRoundRobin
     * @return bool|null
     */
    public function getIsRouteRoundRobin()
    {
        return $this->isRouteRoundRobin;
    }

    /**
     * Setter for isRouteRoundRobin
     *
     * @ElementName isRouteRoundRobin
     * @param bool|null $isRouteRoundRobin
     * @return $this
     */
    public function setIsRouteRoundRobin($isRouteRoundRobin)
    {
        $this->isRouteRoundRobin = $isRouteRoundRobin;
        return $this;
    }

    /**
     * Getter for routeTimerSeconds
     *
     * @ElementName routeTimerSeconds
     * @return int|null
     */
    public function getRouteTimerSeconds()
    {
        return $this->routeTimerSeconds;
    }

    /**
     * Setter for routeTimerSeconds
     *
     * @ElementName routeTimerSeconds
     * @param int|null $routeTimerSeconds
     * @return $this
     */
    public function setRouteTimerSeconds($routeTimerSeconds)
    {
        $this->routeTimerSeconds = $routeTimerSeconds;
        return $this;
    }

    /**
     * Getter for dnsResolvedAddressSelectionPolicy
     *
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy|null
     */
    public function getDnsResolvedAddressSelectionPolicy()
    {
        return $this->dnsResolvedAddressSelectionPolicy;
    }

    /**
     * Setter for dnsResolvedAddressSelectionPolicy
     *
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy|null $dnsResolvedAddressSelectionPolicy
     * @return $this
     */
    public function setDnsResolvedAddressSelectionPolicy(\CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy $dnsResolvedAddressSelectionPolicy)
    {
        $this->dnsResolvedAddressSelectionPolicy = $dnsResolvedAddressSelectionPolicy;
        return $this;
    }

    /**
     * Getter for statefulExpirationMinutes
     *
     * @ElementName statefulExpirationMinutes
     * @return int|null
     */
    public function getStatefulExpirationMinutes()
    {
        return $this->statefulExpirationMinutes;
    }

    /**
     * Setter for statefulExpirationMinutes
     *
     * @ElementName statefulExpirationMinutes
     * @param int|null $statefulExpirationMinutes
     * @return $this
     */
    public function setStatefulExpirationMinutes($statefulExpirationMinutes)
    {
        $this->statefulExpirationMinutes = $statefulExpirationMinutes;
        return $this;
    }

    /**
     * Getter for maxAddressesPerHostname
     *
     * @ElementName maxAddressesPerHostname
     * @return int|null
     */
    public function getMaxAddressesPerHostname()
    {
        return $this->maxAddressesPerHostname;
    }

    /**
     * Setter for maxAddressesPerHostname
     *
     * @ElementName maxAddressesPerHostname
     * @param int|null $maxAddressesPerHostname
     * @return $this
     */
    public function setMaxAddressesPerHostname($maxAddressesPerHostname)
    {
        $this->maxAddressesPerHostname = $maxAddressesPerHostname;
        return $this;
    }

    /**
     * Getter for maxAddressesDuringSetup
     *
     * @ElementName maxAddressesDuringSetup
     * @return int|null
     */
    public function getMaxAddressesDuringSetup()
    {
        return $this->maxAddressesDuringSetup;
    }

    /**
     * Setter for maxAddressesDuringSetup
     *
     * @ElementName maxAddressesDuringSetup
     * @param int|null $maxAddressesDuringSetup
     * @return $this
     */
    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup)
    {
        $this->maxAddressesDuringSetup = $maxAddressesDuringSetup;
        return $this;
    }


}

