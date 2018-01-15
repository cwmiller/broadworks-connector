<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IPAddressRange
 *
 * IP Address Range.
 */
class IPAddressRange
{

    /**
     * @ElementName minIpAddress
     * @var string|null
     */
    private $minIpAddress = null;

    /**
     * @ElementName maxIpAddress
     * @var string|null
     */
    private $maxIpAddress = null;

    /**
     * Getter for minIpAddress
     *
     * @ElementName minIpAddress
     * @return string|null
     */
    public function getMinIpAddress()
    {
        return $this->minIpAddress;
    }

    /**
     * Setter for minIpAddress
     *
     * @ElementName minIpAddress
     * @param string|null $minIpAddress
     * @return $this
     */
    public function setMinIpAddress($minIpAddress)
    {
        $this->minIpAddress = $minIpAddress;
        return $this;
    }

    /**
     * Getter for maxIpAddress
     *
     * @ElementName maxIpAddress
     * @return string|null
     */
    public function getMaxIpAddress()
    {
        return $this->maxIpAddress;
    }

    /**
     * Setter for maxIpAddress
     *
     * @ElementName maxIpAddress
     * @param string|null $maxIpAddress
     * @return $this
     */
    public function setMaxIpAddress($maxIpAddress)
    {
        $this->maxIpAddress = $maxIpAddress;
        return $this;
    }


}

