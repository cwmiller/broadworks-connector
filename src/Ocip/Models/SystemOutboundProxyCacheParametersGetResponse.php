<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutboundProxyCacheParametersGetResponse
 *
 * Response to SystemOutboundProxyCacheParametersGetRequest.
 *         Contains a list of Outbound Proxy Cache system parameters.
 *
 * @see SystemOutboundProxyCacheParametersGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14068","type":"sequence"}]
 */
class SystemOutboundProxyCacheParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName evictionTimeoutMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinInclusive 0
     * @MaxInclusive 525600
     * @var int|null
     */
    private $evictionTimeoutMinutes = null;

    /**
     * @ElementName refreshTimeoutMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinInclusive 0
     * @MaxInclusive 525600
     * @var int|null
     */
    private $refreshTimeoutMinutes = null;

    /**
     * @ElementName auditIntervalMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinInclusive 0
     * @MaxInclusive 525600
     * @var int|null
     */
    private $auditIntervalMinutes = null;

    /**
     * @ElementName maximumCacheSize
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinInclusive 0
     * @var int|null
     */
    private $maximumCacheSize = null;

    /**
     * @ElementName dnsTypeDefaultValue
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $dnsTypeDefaultValue = null;

    /**
     * @ElementName useDnsSrvDefaultValue
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $useDnsSrvDefaultValue = null;

    /**
     * @ElementName srvPrefixDefaultValue
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $srvPrefixDefaultValue = null;

    /**
     * @ElementName outboundProxyDefaultValue
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $outboundProxyDefaultValue = null;

    /**
     * @ElementName transportTypeDefaultValue
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $transportTypeDefaultValue = null;

    /**
     * @ElementName secureRtpDefaultValue
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14068
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $secureRtpDefaultValue = null;

    /**
     * Getter for evictionTimeoutMinutes
     *
     * @return int
     */
    public function getEvictionTimeoutMinutes()
    {
        return $this->evictionTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->evictionTimeoutMinutes;
    }

    /**
     * Setter for evictionTimeoutMinutes
     *
     * @param int $evictionTimeoutMinutes
     * @return $this
     */
    public function setEvictionTimeoutMinutes($evictionTimeoutMinutes)
    {
        $this->evictionTimeoutMinutes = $evictionTimeoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEvictionTimeoutMinutes()
    {
        $this->evictionTimeoutMinutes = null;
        return $this;
    }

    /**
     * Getter for refreshTimeoutMinutes
     *
     * @return int
     */
    public function getRefreshTimeoutMinutes()
    {
        return $this->refreshTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->refreshTimeoutMinutes;
    }

    /**
     * Setter for refreshTimeoutMinutes
     *
     * @param int $refreshTimeoutMinutes
     * @return $this
     */
    public function setRefreshTimeoutMinutes($refreshTimeoutMinutes)
    {
        $this->refreshTimeoutMinutes = $refreshTimeoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRefreshTimeoutMinutes()
    {
        $this->refreshTimeoutMinutes = null;
        return $this;
    }

    /**
     * Getter for auditIntervalMinutes
     *
     * @return int
     */
    public function getAuditIntervalMinutes()
    {
        return $this->auditIntervalMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->auditIntervalMinutes;
    }

    /**
     * Setter for auditIntervalMinutes
     *
     * @param int $auditIntervalMinutes
     * @return $this
     */
    public function setAuditIntervalMinutes($auditIntervalMinutes)
    {
        $this->auditIntervalMinutes = $auditIntervalMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuditIntervalMinutes()
    {
        $this->auditIntervalMinutes = null;
        return $this;
    }

    /**
     * Getter for maximumCacheSize
     *
     * @return int
     */
    public function getMaximumCacheSize()
    {
        return $this->maximumCacheSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumCacheSize;
    }

    /**
     * Setter for maximumCacheSize
     *
     * @param int $maximumCacheSize
     * @return $this
     */
    public function setMaximumCacheSize($maximumCacheSize)
    {
        $this->maximumCacheSize = $maximumCacheSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumCacheSize()
    {
        $this->maximumCacheSize = null;
        return $this;
    }

    /**
     * Getter for dnsTypeDefaultValue
     *
     * @return string
     */
    public function getDnsTypeDefaultValue()
    {
        return $this->dnsTypeDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnsTypeDefaultValue;
    }

    /**
     * Setter for dnsTypeDefaultValue
     *
     * @param string $dnsTypeDefaultValue
     * @return $this
     */
    public function setDnsTypeDefaultValue($dnsTypeDefaultValue)
    {
        $this->dnsTypeDefaultValue = $dnsTypeDefaultValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnsTypeDefaultValue()
    {
        $this->dnsTypeDefaultValue = null;
        return $this;
    }

    /**
     * Getter for useDnsSrvDefaultValue
     *
     * @return string
     */
    public function getUseDnsSrvDefaultValue()
    {
        return $this->useDnsSrvDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDnsSrvDefaultValue;
    }

    /**
     * Setter for useDnsSrvDefaultValue
     *
     * @param string $useDnsSrvDefaultValue
     * @return $this
     */
    public function setUseDnsSrvDefaultValue($useDnsSrvDefaultValue)
    {
        $this->useDnsSrvDefaultValue = $useDnsSrvDefaultValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDnsSrvDefaultValue()
    {
        $this->useDnsSrvDefaultValue = null;
        return $this;
    }

    /**
     * Getter for srvPrefixDefaultValue
     *
     * @return string
     */
    public function getSrvPrefixDefaultValue()
    {
        return $this->srvPrefixDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->srvPrefixDefaultValue;
    }

    /**
     * Setter for srvPrefixDefaultValue
     *
     * @param string $srvPrefixDefaultValue
     * @return $this
     */
    public function setSrvPrefixDefaultValue($srvPrefixDefaultValue)
    {
        $this->srvPrefixDefaultValue = $srvPrefixDefaultValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSrvPrefixDefaultValue()
    {
        $this->srvPrefixDefaultValue = null;
        return $this;
    }

    /**
     * Getter for outboundProxyDefaultValue
     *
     * @return string
     */
    public function getOutboundProxyDefaultValue()
    {
        return $this->outboundProxyDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundProxyDefaultValue;
    }

    /**
     * Setter for outboundProxyDefaultValue
     *
     * @param string $outboundProxyDefaultValue
     * @return $this
     */
    public function setOutboundProxyDefaultValue($outboundProxyDefaultValue)
    {
        $this->outboundProxyDefaultValue = $outboundProxyDefaultValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutboundProxyDefaultValue()
    {
        $this->outboundProxyDefaultValue = null;
        return $this;
    }

    /**
     * Getter for transportTypeDefaultValue
     *
     * @return string
     */
    public function getTransportTypeDefaultValue()
    {
        return $this->transportTypeDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transportTypeDefaultValue;
    }

    /**
     * Setter for transportTypeDefaultValue
     *
     * @param string $transportTypeDefaultValue
     * @return $this
     */
    public function setTransportTypeDefaultValue($transportTypeDefaultValue)
    {
        $this->transportTypeDefaultValue = $transportTypeDefaultValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransportTypeDefaultValue()
    {
        $this->transportTypeDefaultValue = null;
        return $this;
    }

    /**
     * Getter for secureRtpDefaultValue
     *
     * @return string
     */
    public function getSecureRtpDefaultValue()
    {
        return $this->secureRtpDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secureRtpDefaultValue;
    }

    /**
     * Setter for secureRtpDefaultValue
     *
     * @param string $secureRtpDefaultValue
     * @return $this
     */
    public function setSecureRtpDefaultValue($secureRtpDefaultValue)
    {
        $this->secureRtpDefaultValue = $secureRtpDefaultValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecureRtpDefaultValue()
    {
        $this->secureRtpDefaultValue = null;
        return $this;
    }


}

