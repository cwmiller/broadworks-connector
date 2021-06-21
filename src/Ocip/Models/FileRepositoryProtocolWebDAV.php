<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolWebDAV
 *
 * Attributes of the WebDav protocol when the file repository interface is using WebDav.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2812","type":"sequence"}]
 */
class FileRepositoryProtocolWebDAV
{

    /**
     * @ElementName secure
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2812
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2812
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $netAddress = null;

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }


}

