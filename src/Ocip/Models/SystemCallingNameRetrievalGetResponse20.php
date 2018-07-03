<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalGetResponse20
 *
 * Response to SystemCallingNameRetrievalGetRequest20.
 *
 * @see SystemCallingNameRetrievalGetRequest20
 */
class SystemCallingNameRetrievalGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName triggerCNAMQueriesForAllNetworkCalls
     * @var bool|null
     */
    private $triggerCNAMQueriesForAllNetworkCalls = null;

    /**
     * @ElementName triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @var bool|null
     */
    private $triggerCNAMQueriesForGroupAndEnterpriseCalls = null;

    /**
     * @ElementName queryProtocol
     * @var string|null
     */
    private $queryProtocol = null;

    /**
     * @ElementName queryTimeoutMilliseconds
     * @var int|null
     */
    private $queryTimeoutMilliseconds = null;

    /**
     * @ElementName sipExternalDatabaseNetAddress
     * @var string|null
     */
    private $sipExternalDatabaseNetAddress = null;

    /**
     * @ElementName sipExternalDatabasePort
     * @var int|null
     */
    private $sipExternalDatabasePort = null;

    /**
     * @ElementName sipExternalDatabaseTransport
     * @var string|null
     */
    private $sipExternalDatabaseTransport = null;

    /**
     * @ElementName soapExternalDatabaseNetAddress
     * @var string|null
     */
    private $soapExternalDatabaseNetAddress = null;

    /**
     * @ElementName callingNameSource
     * @var string|null
     */
    private $callingNameSource = null;

    /**
     * @ElementName routeAdvanceTimer
     * @var int|null
     */
    private $routeAdvanceTimer = null;

    /**
     * @ElementName retryFailedCNAMServerInterval
     * @var int|null
     */
    private $retryFailedCNAMServerInterval = null;

    /**
     * @ElementName ignoreRestrictedPresentationIndicator
     * @var bool|null
     */
    private $ignoreRestrictedPresentationIndicator = null;

    /**
     * @ElementName supportsDNSSRV
     * @var bool|null
     */
    private $supportsDNSSRV = null;

    /**
     * Getter for triggerCNAMQueriesForAllNetworkCalls
     *
     * @ElementName triggerCNAMQueriesForAllNetworkCalls
     * @return bool|null
     */
    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return $this->triggerCNAMQueriesForAllNetworkCalls;
    }

    /**
     * Setter for triggerCNAMQueriesForAllNetworkCalls
     *
     * @ElementName triggerCNAMQueriesForAllNetworkCalls
     * @param bool|null $triggerCNAMQueriesForAllNetworkCalls
     * @return $this
     */
    public function setTriggerCNAMQueriesForAllNetworkCalls($triggerCNAMQueriesForAllNetworkCalls)
    {
        $this->triggerCNAMQueriesForAllNetworkCalls = $triggerCNAMQueriesForAllNetworkCalls;
        return $this;
    }

    /**
     * Getter for triggerCNAMQueriesForGroupAndEnterpriseCalls
     *
     * @ElementName triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @return bool|null
     */
    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return $this->triggerCNAMQueriesForGroupAndEnterpriseCalls;
    }

    /**
     * Setter for triggerCNAMQueriesForGroupAndEnterpriseCalls
     *
     * @ElementName triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @param bool|null $triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @return $this
     */
    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls)
    {
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = $triggerCNAMQueriesForGroupAndEnterpriseCalls;
        return $this;
    }

    /**
     * Getter for queryProtocol
     *
     * @ElementName queryProtocol
     * @return string|null
     */
    public function getQueryProtocol()
    {
        return $this->queryProtocol;
    }

    /**
     * Setter for queryProtocol
     *
     * @ElementName queryProtocol
     * @param string|null $queryProtocol
     * @return $this
     */
    public function setQueryProtocol($queryProtocol)
    {
        $this->queryProtocol = $queryProtocol;
        return $this;
    }

    /**
     * Getter for queryTimeoutMilliseconds
     *
     * @ElementName queryTimeoutMilliseconds
     * @return int|null
     */
    public function getQueryTimeoutMilliseconds()
    {
        return $this->queryTimeoutMilliseconds;
    }

    /**
     * Setter for queryTimeoutMilliseconds
     *
     * @ElementName queryTimeoutMilliseconds
     * @param int|null $queryTimeoutMilliseconds
     * @return $this
     */
    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds)
    {
        $this->queryTimeoutMilliseconds = $queryTimeoutMilliseconds;
        return $this;
    }

    /**
     * Getter for sipExternalDatabaseNetAddress
     *
     * @ElementName sipExternalDatabaseNetAddress
     * @return string|null
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return $this->sipExternalDatabaseNetAddress;
    }

    /**
     * Setter for sipExternalDatabaseNetAddress
     *
     * @ElementName sipExternalDatabaseNetAddress
     * @param string|null $sipExternalDatabaseNetAddress
     * @return $this
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress)
    {
        $this->sipExternalDatabaseNetAddress = $sipExternalDatabaseNetAddress;
        return $this;
    }

    /**
     * Getter for sipExternalDatabasePort
     *
     * @ElementName sipExternalDatabasePort
     * @return int|null
     */
    public function getSipExternalDatabasePort()
    {
        return $this->sipExternalDatabasePort;
    }

    /**
     * Setter for sipExternalDatabasePort
     *
     * @ElementName sipExternalDatabasePort
     * @param int|null $sipExternalDatabasePort
     * @return $this
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort)
    {
        $this->sipExternalDatabasePort = $sipExternalDatabasePort;
        return $this;
    }

    /**
     * Getter for sipExternalDatabaseTransport
     *
     * @ElementName sipExternalDatabaseTransport
     * @return string|null
     */
    public function getSipExternalDatabaseTransport()
    {
        return $this->sipExternalDatabaseTransport;
    }

    /**
     * Setter for sipExternalDatabaseTransport
     *
     * @ElementName sipExternalDatabaseTransport
     * @param string|null $sipExternalDatabaseTransport
     * @return $this
     */
    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport)
    {
        $this->sipExternalDatabaseTransport = $sipExternalDatabaseTransport;
        return $this;
    }

    /**
     * Getter for soapExternalDatabaseNetAddress
     *
     * @ElementName soapExternalDatabaseNetAddress
     * @return string|null
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return $this->soapExternalDatabaseNetAddress;
    }

    /**
     * Setter for soapExternalDatabaseNetAddress
     *
     * @ElementName soapExternalDatabaseNetAddress
     * @param string|null $soapExternalDatabaseNetAddress
     * @return $this
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress)
    {
        $this->soapExternalDatabaseNetAddress = $soapExternalDatabaseNetAddress;
        return $this;
    }

    /**
     * Getter for callingNameSource
     *
     * @ElementName callingNameSource
     * @return string|null
     */
    public function getCallingNameSource()
    {
        return $this->callingNameSource;
    }

    /**
     * Setter for callingNameSource
     *
     * @ElementName callingNameSource
     * @param string|null $callingNameSource
     * @return $this
     */
    public function setCallingNameSource($callingNameSource)
    {
        $this->callingNameSource = $callingNameSource;
        return $this;
    }

    /**
     * Getter for routeAdvanceTimer
     *
     * @ElementName routeAdvanceTimer
     * @return int|null
     */
    public function getRouteAdvanceTimer()
    {
        return $this->routeAdvanceTimer;
    }

    /**
     * Setter for routeAdvanceTimer
     *
     * @ElementName routeAdvanceTimer
     * @param int|null $routeAdvanceTimer
     * @return $this
     */
    public function setRouteAdvanceTimer($routeAdvanceTimer)
    {
        $this->routeAdvanceTimer = $routeAdvanceTimer;
        return $this;
    }

    /**
     * Getter for retryFailedCNAMServerInterval
     *
     * @ElementName retryFailedCNAMServerInterval
     * @return int|null
     */
    public function getRetryFailedCNAMServerInterval()
    {
        return $this->retryFailedCNAMServerInterval;
    }

    /**
     * Setter for retryFailedCNAMServerInterval
     *
     * @ElementName retryFailedCNAMServerInterval
     * @param int|null $retryFailedCNAMServerInterval
     * @return $this
     */
    public function setRetryFailedCNAMServerInterval($retryFailedCNAMServerInterval)
    {
        $this->retryFailedCNAMServerInterval = $retryFailedCNAMServerInterval;
        return $this;
    }

    /**
     * Getter for ignoreRestrictedPresentationIndicator
     *
     * @ElementName ignoreRestrictedPresentationIndicator
     * @return bool|null
     */
    public function getIgnoreRestrictedPresentationIndicator()
    {
        return $this->ignoreRestrictedPresentationIndicator;
    }

    /**
     * Setter for ignoreRestrictedPresentationIndicator
     *
     * @ElementName ignoreRestrictedPresentationIndicator
     * @param bool|null $ignoreRestrictedPresentationIndicator
     * @return $this
     */
    public function setIgnoreRestrictedPresentationIndicator($ignoreRestrictedPresentationIndicator)
    {
        $this->ignoreRestrictedPresentationIndicator = $ignoreRestrictedPresentationIndicator;
        return $this;
    }

    /**
     * Getter for supportsDNSSRV
     *
     * @ElementName supportsDNSSRV
     * @return bool|null
     */
    public function getSupportsDNSSRV()
    {
        return $this->supportsDNSSRV;
    }

    /**
     * Setter for supportsDNSSRV
     *
     * @ElementName supportsDNSSRV
     * @param bool|null $supportsDNSSRV
     * @return $this
     */
    public function setSupportsDNSSRV($supportsDNSSRV)
    {
        $this->supportsDNSSRV = $supportsDNSSRV;
        return $this;
    }


}

