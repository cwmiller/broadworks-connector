<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalGetResponse16sp1
 *
 * Response to SystemCallingNameRetrievalGetRequest16sp1.
 *
 * @see SystemCallingNameRetrievalGetRequest16sp1
 */
class SystemCallingNameRetrievalGetResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    private $sipExternalDatabaseTransport = null;

    /**
     * @ElementName soapExternalDatabaseNetAddress
     * @var string|null
     */
    private $soapExternalDatabaseNetAddress = null;

    /**
     * @ElementName soapSupportsDNSSRV
     * @var bool|null
     */
    private $soapSupportsDNSSRV = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol|null
     */
    public function getQueryProtocol()
    {
        return $this->queryProtocol;
    }

    /**
     * Setter for queryProtocol
     *
     * @ElementName queryProtocol
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol|null $queryProtocol
     * @return $this
     */
    public function setQueryProtocol(\CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol $queryProtocol)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    public function getSipExternalDatabaseTransport()
    {
        return $this->sipExternalDatabaseTransport;
    }

    /**
     * Setter for sipExternalDatabaseTransport
     *
     * @ElementName sipExternalDatabaseTransport
     * @param \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null $sipExternalDatabaseTransport
     * @return $this
     */
    public function setSipExternalDatabaseTransport(\CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $sipExternalDatabaseTransport)
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
     * Getter for soapSupportsDNSSRV
     *
     * @ElementName soapSupportsDNSSRV
     * @return bool|null
     */
    public function getSoapSupportsDNSSRV()
    {
        return $this->soapSupportsDNSSRV;
    }

    /**
     * Setter for soapSupportsDNSSRV
     *
     * @ElementName soapSupportsDNSSRV
     * @param bool|null $soapSupportsDNSSRV
     * @return $this
     */
    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV)
    {
        $this->soapSupportsDNSSRV = $soapSupportsDNSSRV;
        return $this;
    }


}

