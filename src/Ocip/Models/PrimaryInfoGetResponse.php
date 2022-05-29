<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PrimaryInfoGetResponse
 *
 * Information about the primary server in the high-availablity cluster.
 *         For optimization, we only get the hostname and addresses for primary if they are
 *         explicitly requested or if the current server is not the primary.
 *
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:473","type":"sequence"}]
 */
class PrimaryInfoGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:473
     * @var bool|null
     */
    protected $isPrimary = null;

    /**
     * @ElementName hostnameForPrimary
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:473
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $hostnameForPrimary = null;

    /**
     * @ElementName addressForPrimary
     * @Type string
     * @Array
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:473
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $addressForPrimary = array(
        
    );

    /**
     * @ElementName privateAddressForPrimary
     * @Type string
     * @Array
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:473
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $privateAddressForPrimary = array(
        
    );

    /**
     * Getter for isPrimary
     *
     * Is the server that processed this request the primary in the cluster?
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * Is the server that processed this request the primary in the cluster?
     *
     * @param bool $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPrimary()
    {
        $this->isPrimary = null;
        return $this;
    }

    /**
     * Getter for hostnameForPrimary
     *
     * Primary server's hostname.
     *
     * @return string
     */
    public function getHostnameForPrimary()
    {
        return $this->hostnameForPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostnameForPrimary;
    }

    /**
     * Setter for hostnameForPrimary
     *
     * Primary server's hostname.
     *
     * @param string $hostnameForPrimary
     * @return $this
     */
    public function setHostnameForPrimary($hostnameForPrimary)
    {
        $this->hostnameForPrimary = $hostnameForPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostnameForPrimary()
    {
        $this->hostnameForPrimary = null;
        return $this;
    }

    /**
     * Getter for addressForPrimary
     *
     * List of addresses for primary server in cluster.
     *
     * @return string[]
     */
    public function getAddressForPrimary()
    {
        return $this->addressForPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addressForPrimary;
    }

    /**
     * Setter for addressForPrimary
     *
     * List of addresses for primary server in cluster.
     *
     * @param string[] $addressForPrimary
     * @return $this
     */
    public function setAddressForPrimary(array $addressForPrimary)
    {
        $this->addressForPrimary = $addressForPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddressForPrimary()
    {
        $this->addressForPrimary = null;
        return $this;
    }

    /**
     * Adder for addressForPrimary
     *
     * @param string $addressForPrimary
     * @return $this
     */
    public function addAddressForPrimary(string $addressForPrimary)
    {
        $this->addressForPrimary[] = $addressForPrimary;
        return $this;
    }

    /**
     * Getter for privateAddressForPrimary
     *
     * List of private addresses for primary server in cluster.
     *
     * @return string[]
     */
    public function getPrivateAddressForPrimary()
    {
        return $this->privateAddressForPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateAddressForPrimary;
    }

    /**
     * Setter for privateAddressForPrimary
     *
     * List of private addresses for primary server in cluster.
     *
     * @param string[] $privateAddressForPrimary
     * @return $this
     */
    public function setPrivateAddressForPrimary(array $privateAddressForPrimary)
    {
        $this->privateAddressForPrimary = $privateAddressForPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateAddressForPrimary()
    {
        $this->privateAddressForPrimary = null;
        return $this;
    }

    /**
     * Adder for privateAddressForPrimary
     *
     * @param string $privateAddressForPrimary
     * @return $this
     */
    public function addPrivateAddressForPrimary(string $privateAddressForPrimary)
    {
        $this->privateAddressForPrimary[] = $privateAddressForPrimary;
        return $this;
    }


}

