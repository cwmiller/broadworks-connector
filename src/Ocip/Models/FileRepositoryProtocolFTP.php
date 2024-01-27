<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolFTP
 *
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49846","type":"sequence"}]
 */
class FileRepositoryProtocolFTP
{
    /**
     * @ElementName ftpPassive
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49846
     * @var bool|null
     */
    protected $ftpPassive = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:49846
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * Getter for ftpPassive
     *
     * @return bool
     */
    public function getFtpPassive()
    {
        return $this->ftpPassive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpPassive;
    }

    /**
     * Setter for ftpPassive
     *
     * @param bool $ftpPassive
     * @return $this
     */
    public function setFtpPassive($ftpPassive)
    {
        $this->ftpPassive = $ftpPassive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpPassive()
    {
        $this->ftpPassive = null;
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

