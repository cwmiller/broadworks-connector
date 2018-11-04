<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingNameRetrievalModifyRequest16sp1
 *
 * Modifies the system's calling name retrieval attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemCallingNameRetrievalModifyRequest20
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCallingNameRetrievalModifyRequest20
 */
class SystemCallingNameRetrievalModifyRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipExternalDatabaseNetAddress = null;

    /**
     * @ElementName sipExternalDatabasePort
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipExternalDatabasePort = null;

    /**
     * @ElementName sipExternalDatabaseTransport
     * @var string|null
     */
    private $sipExternalDatabaseTransport = null;

    /**
     * @ElementName soapExternalDatabaseNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $soapExternalDatabaseNetAddress = null;

    /**
     * @ElementName soapSupportsDNSSRV
     * @var bool|null
     */
    private $soapSupportsDNSSRV = null;

    /**
     * @ElementName callingNameSource
     * @var string|null
     */
    private $callingNameSource = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return $this->sipExternalDatabaseNetAddress;
    }

    /**
     * Setter for sipExternalDatabaseNetAddress
     *
     * @ElementName sipExternalDatabaseNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sipExternalDatabaseNetAddress
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipExternalDatabasePort()
    {
        return $this->sipExternalDatabasePort;
    }

    /**
     * Setter for sipExternalDatabasePort
     *
     * @ElementName sipExternalDatabasePort
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $sipExternalDatabasePort
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return $this->soapExternalDatabaseNetAddress;
    }

    /**
     * Setter for soapExternalDatabaseNetAddress
     *
     * @ElementName soapExternalDatabaseNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $soapExternalDatabaseNetAddress
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


}

