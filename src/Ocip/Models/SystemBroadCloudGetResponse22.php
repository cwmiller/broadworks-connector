<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadCloudGetResponse22
 *
 * Response to the SystemBroadCloudGetRequest22.
 *         The response contains the system interface attributes for Messaging Server/BroadCloud.
 *
 * @see SystemBroadCloudGetRequest22
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2628","type":"sequence"}]
 */
class SystemBroadCloudGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2628
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2628
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningUserId = null;

    /**
     * @ElementName enableSynchronization
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:2628
     * @var bool|null
     */
    protected $enableSynchronization = null;

    /**
     * @ElementName proxyHost
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2628
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $proxyHost = null;

    /**
     * @ElementName proxyPort
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:2628
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $proxyPort = null;

    /**
     * Getter for provisioningUrl
     *
     * @return string
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @param string $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        $this->provisioningUrl = $provisioningUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningUrl()
    {
        $this->provisioningUrl = null;
        return $this;
    }

    /**
     * Getter for provisioningUserId
     *
     * @return string
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @param string $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        $this->provisioningUserId = $provisioningUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningUserId()
    {
        $this->provisioningUserId = null;
        return $this;
    }

    /**
     * Getter for enableSynchronization
     *
     * @return bool
     */
    public function getEnableSynchronization()
    {
        return $this->enableSynchronization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSynchronization;
    }

    /**
     * Setter for enableSynchronization
     *
     * @param bool $enableSynchronization
     * @return $this
     */
    public function setEnableSynchronization($enableSynchronization)
    {
        $this->enableSynchronization = $enableSynchronization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSynchronization()
    {
        $this->enableSynchronization = null;
        return $this;
    }

    /**
     * Getter for proxyHost
     *
     * @return string
     */
    public function getProxyHost()
    {
        return $this->proxyHost instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->proxyHost;
    }

    /**
     * Setter for proxyHost
     *
     * @param string $proxyHost
     * @return $this
     */
    public function setProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProxyHost()
    {
        $this->proxyHost = null;
        return $this;
    }

    /**
     * Getter for proxyPort
     *
     * @return int
     */
    public function getProxyPort()
    {
        return $this->proxyPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->proxyPort;
    }

    /**
     * Setter for proxyPort
     *
     * @param int $proxyPort
     * @return $this
     */
    public function setProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProxyPort()
    {
        $this->proxyPort = null;
        return $this;
    }
}

