<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PrimaryInfoGetResponse
 *
 * Information about the primary server in the high-availablity cluster.
 *         For optimization, we only get the hostname and addresses for primary if
 * they are
 *         explicitly requested or if the current server is not the primary.
 */
class PrimaryInfoGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * Is the server that processed this request the primary in the cluster?
     *
     * @ElementName isPrimary
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * Primary server's hostname.
     *
     * @ElementName hostnameForPrimary
     * @var string|null
     */
    private $hostnameForPrimary = null;

    /**
     * List of addresses for primary server in cluster.
     *
     * @ElementName addressForPrimary
     * @var string[]
     */
    private $addressForPrimary = array(
        
    );

    /**
     * List of private addresses for primary server in cluster.
     *
     * @ElementName privateAddressForPrimary
     * @var string[]
     */
    private $privateAddressForPrimary = array(
        
    );

    /**
     * Getter for isPrimary
     *
     * Is the server that processed this request the primary in the cluster?
     *
     * @ElementName isPrimary
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * Is the server that processed this request the primary in the cluster?
     *
     * @ElementName isPrimary
     * @param bool|null $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * Getter for hostnameForPrimary
     *
     * Primary server's hostname.
     *
     * @ElementName hostnameForPrimary
     * @return string|null
     */
    public function getHostnameForPrimary()
    {
        return $this->hostnameForPrimary;
    }

    /**
     * Setter for hostnameForPrimary
     *
     * Primary server's hostname.
     *
     * @ElementName hostnameForPrimary
     * @param string|null $hostnameForPrimary
     * @return $this
     */
    public function setHostnameForPrimary($hostnameForPrimary)
    {
        $this->hostnameForPrimary = $hostnameForPrimary;
        return $this;
    }

    /**
     * Getter for addressForPrimary
     *
     * List of addresses for primary server in cluster.
     *
     * @ElementName addressForPrimary
     * @return string[]
     */
    public function getAddressForPrimary()
    {
        return $this->addressForPrimary;
    }

    /**
     * Setter for addressForPrimary
     *
     * List of addresses for primary server in cluster.
     *
     * @ElementName addressForPrimary
     * @param string[] $addressForPrimary
     * @return $this
     */
    public function setAddressForPrimary($addressForPrimary)
    {
        $this->addressForPrimary = $addressForPrimary;
        return $this;
    }

    /**
     * Adder for addressForPrimary
     *
     * List of addresses for primary server in cluster.
     *
     * @ElementName addressForPrimary
     * @param string $addressForPrimary
     * @return $this
     */
    public function addAddressForPrimary($addressForPrimary)
    {
        $this->addressForPrimary []= $addressForPrimary;
        return $this;
    }

    /**
     * Getter for privateAddressForPrimary
     *
     * List of private addresses for primary server in cluster.
     *
     * @ElementName privateAddressForPrimary
     * @return string[]
     */
    public function getPrivateAddressForPrimary()
    {
        return $this->privateAddressForPrimary;
    }

    /**
     * Setter for privateAddressForPrimary
     *
     * List of private addresses for primary server in cluster.
     *
     * @ElementName privateAddressForPrimary
     * @param string[] $privateAddressForPrimary
     * @return $this
     */
    public function setPrivateAddressForPrimary($privateAddressForPrimary)
    {
        $this->privateAddressForPrimary = $privateAddressForPrimary;
        return $this;
    }

    /**
     * Adder for privateAddressForPrimary
     *
     * List of private addresses for primary server in cluster.
     *
     * @ElementName privateAddressForPrimary
     * @param string $privateAddressForPrimary
     * @return $this
     */
    public function addPrivateAddressForPrimary($privateAddressForPrimary)
    {
        $this->privateAddressForPrimary []= $privateAddressForPrimary;
        return $this;
    }


}

