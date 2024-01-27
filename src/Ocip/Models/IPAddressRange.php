<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IPAddressRange
 *
 * IP Address Range.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3434","type":"sequence"}]
 */
class IPAddressRange
{
    /**
     * @ElementName minIpAddress
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3434
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    protected $minIpAddress = null;

    /**
     * @ElementName maxIpAddress
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3434
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    protected $maxIpAddress = null;

    /**
     * Getter for minIpAddress
     *
     * @return string
     */
    public function getMinIpAddress()
    {
        return $this->minIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minIpAddress;
    }

    /**
     * Setter for minIpAddress
     *
     * @param string $minIpAddress
     * @return $this
     */
    public function setMinIpAddress($minIpAddress)
    {
        $this->minIpAddress = $minIpAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinIpAddress()
    {
        $this->minIpAddress = null;
        return $this;
    }

    /**
     * Getter for maxIpAddress
     *
     * @return string
     */
    public function getMaxIpAddress()
    {
        return $this->maxIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIpAddress;
    }

    /**
     * Setter for maxIpAddress
     *
     * @param string $maxIpAddress
     * @return $this
     */
    public function setMaxIpAddress($maxIpAddress)
    {
        $this->maxIpAddress = $maxIpAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxIpAddress()
    {
        $this->maxIpAddress = null;
        return $this;
    }
}

