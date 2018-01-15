<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolWebDAV
 *
 * Attributes of the WebDav protocol when the file repository interface is using
 * WebDav.
 */
class FileRepositoryProtocolWebDAV
{

    /**
     * @ElementName secure
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * Getter for secure
     *
     * @ElementName secure
     * @return bool|null
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Setter for secure
     *
     * @ElementName secure
     * @param bool|null $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }


}

