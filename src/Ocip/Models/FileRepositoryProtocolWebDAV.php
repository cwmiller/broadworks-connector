<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolWebDAV
 *
 * Attributes of the WebDav protocol when the file repository interface is using WebDav.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3294","type":"sequence"}]
 */
class FileRepositoryProtocolWebDAV
{
    /**
     * @ElementName secure
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3294
     * @var bool|null
     */
    protected $secure = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3294
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

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

