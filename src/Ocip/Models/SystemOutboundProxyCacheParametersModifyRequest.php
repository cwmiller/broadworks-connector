<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutboundProxyCacheParametersModifyRequest
 *
 * Request to modify Outbound Proxy Cache system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Note that an error is returned if CloudPBX is not licensed.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14268","type":"sequence"}]
 */
class SystemOutboundProxyCacheParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName evictionTimeoutMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinInclusive 0
     * @MaxInclusive 525600
     * @var int|null
     */
    protected $evictionTimeoutMinutes = null;

    /**
     * @ElementName refreshTimeoutMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinInclusive 0
     * @MaxInclusive 525600
     * @var int|null
     */
    protected $refreshTimeoutMinutes = null;

    /**
     * @ElementName auditIntervalMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinInclusive 0
     * @MaxInclusive 525600
     * @var int|null
     */
    protected $auditIntervalMinutes = null;

    /**
     * @ElementName maximumCacheSize
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinInclusive 0
     * @var int|null
     */
    protected $maximumCacheSize = null;

    /**
     * @ElementName dnsTypeDefaultValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $dnsTypeDefaultValue = null;

    /**
     * @ElementName useDnsSrvDefaultValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $useDnsSrvDefaultValue = null;

    /**
     * @ElementName srvPrefixDefaultValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $srvPrefixDefaultValue = null;

    /**
     * @ElementName outboundProxyDefaultValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $outboundProxyDefaultValue = null;

    /**
     * @ElementName transportTypeDefaultValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transportTypeDefaultValue = null;

    /**
     * @ElementName secureRtpDefaultValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $secureRtpDefaultValue = null;

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
     * @return string|null
     */
    public function getDnsTypeDefaultValue()
    {
        return $this->dnsTypeDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnsTypeDefaultValue;
    }

    /**
     * Setter for dnsTypeDefaultValue
     *
     * @param string|null $dnsTypeDefaultValue
     * @return $this
     */
    public function setDnsTypeDefaultValue($dnsTypeDefaultValue = null)
    {
        if ($dnsTypeDefaultValue === null) {
            $this->dnsTypeDefaultValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->dnsTypeDefaultValue = $dnsTypeDefaultValue;
        }
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
     * @return string|null
     */
    public function getUseDnsSrvDefaultValue()
    {
        return $this->useDnsSrvDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDnsSrvDefaultValue;
    }

    /**
     * Setter for useDnsSrvDefaultValue
     *
     * @param string|null $useDnsSrvDefaultValue
     * @return $this
     */
    public function setUseDnsSrvDefaultValue($useDnsSrvDefaultValue = null)
    {
        if ($useDnsSrvDefaultValue === null) {
            $this->useDnsSrvDefaultValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->useDnsSrvDefaultValue = $useDnsSrvDefaultValue;
        }
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
     * @return string|null
     */
    public function getSrvPrefixDefaultValue()
    {
        return $this->srvPrefixDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->srvPrefixDefaultValue;
    }

    /**
     * Setter for srvPrefixDefaultValue
     *
     * @param string|null $srvPrefixDefaultValue
     * @return $this
     */
    public function setSrvPrefixDefaultValue($srvPrefixDefaultValue = null)
    {
        if ($srvPrefixDefaultValue === null) {
            $this->srvPrefixDefaultValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->srvPrefixDefaultValue = $srvPrefixDefaultValue;
        }
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
     * @return string|null
     */
    public function getOutboundProxyDefaultValue()
    {
        return $this->outboundProxyDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundProxyDefaultValue;
    }

    /**
     * Setter for outboundProxyDefaultValue
     *
     * @param string|null $outboundProxyDefaultValue
     * @return $this
     */
    public function setOutboundProxyDefaultValue($outboundProxyDefaultValue = null)
    {
        if ($outboundProxyDefaultValue === null) {
            $this->outboundProxyDefaultValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outboundProxyDefaultValue = $outboundProxyDefaultValue;
        }
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
     * @return string|null
     */
    public function getTransportTypeDefaultValue()
    {
        return $this->transportTypeDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transportTypeDefaultValue;
    }

    /**
     * Setter for transportTypeDefaultValue
     *
     * @param string|null $transportTypeDefaultValue
     * @return $this
     */
    public function setTransportTypeDefaultValue($transportTypeDefaultValue = null)
    {
        if ($transportTypeDefaultValue === null) {
            $this->transportTypeDefaultValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transportTypeDefaultValue = $transportTypeDefaultValue;
        }
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
     * @return string|null
     */
    public function getSecureRtpDefaultValue()
    {
        return $this->secureRtpDefaultValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secureRtpDefaultValue;
    }

    /**
     * Setter for secureRtpDefaultValue
     *
     * @param string|null $secureRtpDefaultValue
     * @return $this
     */
    public function setSecureRtpDefaultValue($secureRtpDefaultValue = null)
    {
        if ($secureRtpDefaultValue === null) {
            $this->secureRtpDefaultValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->secureRtpDefaultValue = $secureRtpDefaultValue;
        }
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

