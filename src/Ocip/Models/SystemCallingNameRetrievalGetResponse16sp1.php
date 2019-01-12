<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalGetResponse16sp1
 *
 * Response to SystemCallingNameRetrievalGetRequest16sp1.
 *
 * @see SystemCallingNameRetrievalGetRequest16sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20519","type":"sequence"}]
 */
class SystemCallingNameRetrievalGetResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName triggerCNAMQueriesForAllNetworkCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var bool|null
     */
    private $triggerCNAMQueriesForAllNetworkCalls = null;

    /**
     * @ElementName triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var bool|null
     */
    private $triggerCNAMQueriesForGroupAndEnterpriseCalls = null;

    /**
     * @ElementName queryProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol|null
     */
    private $queryProtocol = null;

    /**
     * @ElementName queryTimeoutMilliseconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var int|null
     */
    private $queryTimeoutMilliseconds = null;

    /**
     * @ElementName sipExternalDatabaseNetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var string|null
     */
    private $sipExternalDatabaseNetAddress = null;

    /**
     * @ElementName sipExternalDatabasePort
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var int|null
     */
    private $sipExternalDatabasePort = null;

    /**
     * @ElementName sipExternalDatabaseTransport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    private $sipExternalDatabaseTransport = null;

    /**
     * @ElementName soapExternalDatabaseNetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var string|null
     */
    private $soapExternalDatabaseNetAddress = null;

    /**
     * @ElementName soapSupportsDNSSRV
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20519
     * @var bool|null
     */
    private $soapSupportsDNSSRV = null;

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
     * Getter for soapSupportsDNSSRV
     *
     * @return bool
     */
    public function getSoapSupportsDNSSRV()
    {
        return $this->soapSupportsDNSSRV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->soapSupportsDNSSRV;
    }

    /**
     * Setter for soapSupportsDNSSRV
     *
     * @param bool $soapSupportsDNSSRV
     * @return $this
     */
    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV)
    {
        $this->soapSupportsDNSSRV = $soapSupportsDNSSRV;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSoapSupportsDNSSRV()
    {
        $this->soapSupportsDNSSRV = null;
        return $this;
    }


}

