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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:21186","type":"sequence"}]
 */
class SystemCallingNameRetrievalModifyRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName triggerCNAMQueriesForAllNetworkCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @var bool|null
     */
    protected $triggerCNAMQueriesForAllNetworkCalls = null;

    /**
     * @ElementName triggerCNAMQueriesForGroupAndEnterpriseCalls
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @var bool|null
     */
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls = null;

    /**
     * @ElementName queryProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalQueryProtocol|null
     */
    protected $queryProtocol = null;

    /**
     * @ElementName queryTimeoutMilliseconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @MinInclusive 100
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $queryTimeoutMilliseconds = null;

    /**
     * @ElementName sipExternalDatabaseNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipExternalDatabaseNetAddress = null;

    /**
     * @ElementName sipExternalDatabasePort
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipExternalDatabasePort = null;

    /**
     * @ElementName sipExternalDatabaseTransport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    protected $sipExternalDatabaseTransport = null;

    /**
     * @ElementName soapExternalDatabaseNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $soapExternalDatabaseNetAddress = null;

    /**
     * @ElementName soapSupportsDNSSRV
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @var bool|null
     */
    protected $soapSupportsDNSSRV = null;

    /**
     * @ElementName callingNameSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21186
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalSourceIdentity|null
     */
    protected $callingNameSource = null;

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
     * @return string|null
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return $this->sipExternalDatabaseNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipExternalDatabaseNetAddress;
    }

    /**
     * Setter for sipExternalDatabaseNetAddress
     *
     * @param string|null $sipExternalDatabaseNetAddress
     * @return $this
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress = null)
    {
        if ($sipExternalDatabaseNetAddress === null) {
            $this->sipExternalDatabaseNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipExternalDatabaseNetAddress = $sipExternalDatabaseNetAddress;
        }
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
     * @return int|null
     */
    public function getSipExternalDatabasePort()
    {
        return $this->sipExternalDatabasePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipExternalDatabasePort;
    }

    /**
     * Setter for sipExternalDatabasePort
     *
     * @param int|null $sipExternalDatabasePort
     * @return $this
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort = null)
    {
        if ($sipExternalDatabasePort === null) {
            $this->sipExternalDatabasePort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipExternalDatabasePort = $sipExternalDatabasePort;
        }
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
     * @return string|null
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return $this->soapExternalDatabaseNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->soapExternalDatabaseNetAddress;
    }

    /**
     * Setter for soapExternalDatabaseNetAddress
     *
     * @param string|null $soapExternalDatabaseNetAddress
     * @return $this
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress = null)
    {
        if ($soapExternalDatabaseNetAddress === null) {
            $this->soapExternalDatabaseNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->soapExternalDatabaseNetAddress = $soapExternalDatabaseNetAddress;
        }
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


}

