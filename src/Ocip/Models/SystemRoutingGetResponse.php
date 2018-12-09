<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetResponse
 *
 * Response to SystemRoutingGetRequest.
 *
 * @see SystemRoutingGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13479","type":"sequence"}]
 */
class SystemRoutingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isRouteRoundRobin
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:13479
     * @var bool|null
     */
    private $isRouteRoundRobin = null;

    /**
     * @ElementName routeTimerSeconds
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13479
     * @var int|null
     */
    private $routeTimerSeconds = null;

    /**
     * @ElementName dnsResolvedAddressSelectionPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy
     * @Group b5f5416d9e71f8e4246cda16c4723744:13479
     * @var \CWM\BroadWorksConnector\Ocip\Models\RoutingDNSResolvedAddressSelectionPolicy|null
     */
    private $dnsResolvedAddressSelectionPolicy = null;

    /**
     * @ElementName statefulExpirationMinutes
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13479
     * @var int|null
     */
    private $statefulExpirationMinutes = null;

    /**
     * @ElementName maxAddressesPerHostname
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13479
     * @var int|null
     */
    private $maxAddressesPerHostname = null;

    /**
     * @ElementName maxAddressesDuringSetup
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:13479
     * @var int|null
     */
    private $maxAddressesDuringSetup = null;

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

