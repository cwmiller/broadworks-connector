<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalGetResponse20
 *
 * Response to SystemCallingNameRetrievalGetRequest20.
 *         
 *         Replaced by: SystemCallingNameRetrievalGetResponse24
 *
 * @see SystemCallingNameRetrievalGetRequest20
 * @see SystemCallingNameRetrievalGetResponse24
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:21135","type":"sequence"}]
 */
class SystemCallingNameRetrievalGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName triggerCNAMQueriesForAllNetworkCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var bool|null
     */
    protected $triggerCNAMQueriesForAllNetworkCalls = null;

    /**
     * @ElementName triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var bool|null
     */
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls = null;

    /**
     * @ElementName queryProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol|null
     */
    protected $queryProtocol = null;

    /**
     * @ElementName queryTimeoutMilliseconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @MinInclusive 100
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $queryTimeoutMilliseconds = null;

    /**
     * @ElementName sipExternalDatabaseNetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $sipExternalDatabaseNetAddress = null;

    /**
     * @ElementName sipExternalDatabasePort
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $sipExternalDatabasePort = null;

    /**
     * @ElementName sipExternalDatabaseTransport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    protected $sipExternalDatabaseTransport = null;

    /**
     * @ElementName soapExternalDatabaseNetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $soapExternalDatabaseNetAddress = null;

    /**
     * @ElementName callingNameSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity|null
     */
    protected $callingNameSource = null;

    /**
     * @ElementName routeAdvanceTimer
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @MinInclusive 100
     * @MaxInclusive 2000
     * @var int|null
     */
    protected $routeAdvanceTimer = null;

    /**
     * @ElementName retryFailedCNAMServerInterval
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @MinInclusive 0
     * @MaxInclusive 604800
     * @var int|null
     */
    protected $retryFailedCNAMServerInterval = null;

    /**
     * @ElementName ignoreRestrictedPresentationIndicator
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var bool|null
     */
    protected $ignoreRestrictedPresentationIndicator = null;

    /**
     * @ElementName supportsDNSSRV
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21135
     * @var bool|null
     */
    protected $supportsDNSSRV = null;

    /**
     * Getter for triggerCNAMQueriesForAllNetworkCalls
     *
     * @return bool
     */
    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return $this->triggerCNAMQueriesForAllNetworkCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->triggerCNAMQueriesForAllNetworkCalls;
    }

    /**
     * Setter for triggerCNAMQueriesForAllNetworkCalls
     *
     * @param bool $triggerCNAMQueriesForAllNetworkCalls
     * @return $this
     */
    public function setTriggerCNAMQueriesForAllNetworkCalls($triggerCNAMQueriesForAllNetworkCalls)
    {
        $this->triggerCNAMQueriesForAllNetworkCalls = $triggerCNAMQueriesForAllNetworkCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTriggerCNAMQueriesForAllNetworkCalls()
    {
        $this->triggerCNAMQueriesForAllNetworkCalls = null;
        return $this;
    }

    /**
     * Getter for triggerCNAMQueriesForGroupAndEnterpriseCalls
     *
     * @return bool
     */
    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return $this->triggerCNAMQueriesForGroupAndEnterpriseCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->triggerCNAMQueriesForGroupAndEnterpriseCalls;
    }

    /**
     * Setter for triggerCNAMQueriesForGroupAndEnterpriseCalls
     *
     * @param bool $triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @return $this
     */
    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls)
    {
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = $triggerCNAMQueriesForGroupAndEnterpriseCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = null;
        return $this;
    }

    /**
     * Getter for queryProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol
     */
    public function getQueryProtocol()
    {
        return $this->queryProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queryProtocol;
    }

    /**
     * Setter for queryProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol $queryProtocol
     * @return $this
     */
    public function setQueryProtocol(\CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol $queryProtocol)
    {
        $this->queryProtocol = $queryProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueryProtocol()
    {
        $this->queryProtocol = null;
        return $this;
    }

    /**
     * Getter for queryTimeoutMilliseconds
     *
     * @return int
     */
    public function getQueryTimeoutMilliseconds()
    {
        return $this->queryTimeoutMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queryTimeoutMilliseconds;
    }

    /**
     * Setter for queryTimeoutMilliseconds
     *
     * @param int $queryTimeoutMilliseconds
     * @return $this
     */
    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds)
    {
        $this->queryTimeoutMilliseconds = $queryTimeoutMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueryTimeoutMilliseconds()
    {
        $this->queryTimeoutMilliseconds = null;
        return $this;
    }

    /**
     * Getter for sipExternalDatabaseNetAddress
     *
     * @return string
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return $this->sipExternalDatabaseNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipExternalDatabaseNetAddress;
    }

    /**
     * Setter for sipExternalDatabaseNetAddress
     *
     * @param string $sipExternalDatabaseNetAddress
     * @return $this
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress)
    {
        $this->sipExternalDatabaseNetAddress = $sipExternalDatabaseNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipExternalDatabaseNetAddress()
    {
        $this->sipExternalDatabaseNetAddress = null;
        return $this;
    }

    /**
     * Getter for sipExternalDatabasePort
     *
     * @return int
     */
    public function getSipExternalDatabasePort()
    {
        return $this->sipExternalDatabasePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipExternalDatabasePort;
    }

    /**
     * Setter for sipExternalDatabasePort
     *
     * @param int $sipExternalDatabasePort
     * @return $this
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort)
    {
        $this->sipExternalDatabasePort = $sipExternalDatabasePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipExternalDatabasePort()
    {
        $this->sipExternalDatabasePort = null;
        return $this;
    }

    /**
     * Getter for sipExternalDatabaseTransport
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     */
    public function getSipExternalDatabaseTransport()
    {
        return $this->sipExternalDatabaseTransport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipExternalDatabaseTransport;
    }

    /**
     * Setter for sipExternalDatabaseTransport
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $sipExternalDatabaseTransport
     * @return $this
     */
    public function setSipExternalDatabaseTransport(\CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $sipExternalDatabaseTransport)
    {
        $this->sipExternalDatabaseTransport = $sipExternalDatabaseTransport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipExternalDatabaseTransport()
    {
        $this->sipExternalDatabaseTransport = null;
        return $this;
    }

    /**
     * Getter for soapExternalDatabaseNetAddress
     *
     * @return string
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return $this->soapExternalDatabaseNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->soapExternalDatabaseNetAddress;
    }

    /**
     * Setter for soapExternalDatabaseNetAddress
     *
     * @param string $soapExternalDatabaseNetAddress
     * @return $this
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress)
    {
        $this->soapExternalDatabaseNetAddress = $soapExternalDatabaseNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSoapExternalDatabaseNetAddress()
    {
        $this->soapExternalDatabaseNetAddress = null;
        return $this;
    }

    /**
     * Getter for callingNameSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity
     */
    public function getCallingNameSource()
    {
        return $this->callingNameSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingNameSource;
    }

    /**
     * Setter for callingNameSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity $callingNameSource
     * @return $this
     */
    public function setCallingNameSource(\CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity $callingNameSource)
    {
        $this->callingNameSource = $callingNameSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingNameSource()
    {
        $this->callingNameSource = null;
        return $this;
    }

    /**
     * Getter for routeAdvanceTimer
     *
     * @return int
     */
    public function getRouteAdvanceTimer()
    {
        return $this->routeAdvanceTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeAdvanceTimer;
    }

    /**
     * Setter for routeAdvanceTimer
     *
     * @param int $routeAdvanceTimer
     * @return $this
     */
    public function setRouteAdvanceTimer($routeAdvanceTimer)
    {
        $this->routeAdvanceTimer = $routeAdvanceTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteAdvanceTimer()
    {
        $this->routeAdvanceTimer = null;
        return $this;
    }

    /**
     * Getter for retryFailedCNAMServerInterval
     *
     * @return int
     */
    public function getRetryFailedCNAMServerInterval()
    {
        return $this->retryFailedCNAMServerInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->retryFailedCNAMServerInterval;
    }

    /**
     * Setter for retryFailedCNAMServerInterval
     *
     * @param int $retryFailedCNAMServerInterval
     * @return $this
     */
    public function setRetryFailedCNAMServerInterval($retryFailedCNAMServerInterval)
    {
        $this->retryFailedCNAMServerInterval = $retryFailedCNAMServerInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRetryFailedCNAMServerInterval()
    {
        $this->retryFailedCNAMServerInterval = null;
        return $this;
    }

    /**
     * Getter for ignoreRestrictedPresentationIndicator
     *
     * @return bool
     */
    public function getIgnoreRestrictedPresentationIndicator()
    {
        return $this->ignoreRestrictedPresentationIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ignoreRestrictedPresentationIndicator;
    }

    /**
     * Setter for ignoreRestrictedPresentationIndicator
     *
     * @param bool $ignoreRestrictedPresentationIndicator
     * @return $this
     */
    public function setIgnoreRestrictedPresentationIndicator($ignoreRestrictedPresentationIndicator)
    {
        $this->ignoreRestrictedPresentationIndicator = $ignoreRestrictedPresentationIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIgnoreRestrictedPresentationIndicator()
    {
        $this->ignoreRestrictedPresentationIndicator = null;
        return $this;
    }

    /**
     * Getter for supportsDNSSRV
     *
     * @return bool
     */
    public function getSupportsDNSSRV()
    {
        return $this->supportsDNSSRV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportsDNSSRV;
    }

    /**
     * Setter for supportsDNSSRV
     *
     * @param bool $supportsDNSSRV
     * @return $this
     */
    public function setSupportsDNSSRV($supportsDNSSRV)
    {
        $this->supportsDNSSRV = $supportsDNSSRV;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportsDNSSRV()
    {
        $this->supportsDNSSRV = null;
        return $this;
    }


}

