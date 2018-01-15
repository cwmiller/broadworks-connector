<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolFTP
 *
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP
{

    /**
     * @ElementName ftpPassive
     * @var bool|null
     */
    private $ftpPassive = null;

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * Getter for ftpPassive
     *
     * @ElementName ftpPassive
     * @return bool|null
     */
    public function getFtpPassive()
    {
        return $this->ftpPassive;
    }

    /**
     * Setter for ftpPassive
     *
     * @ElementName ftpPassive
     * @param bool|null $ftpPassive
     * @return $this
     */
    public function setFtpPassive($ftpPassive)
    {
        $this->ftpPassive = $ftpPassive;
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

