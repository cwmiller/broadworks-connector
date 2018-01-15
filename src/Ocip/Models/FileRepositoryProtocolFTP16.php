<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolFTP16
 *
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP16
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
     * @ElementName ftpRemoteVerification
     * @var bool|null
     */
    private $ftpRemoteVerification = null;

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

    /**
     * Getter for ftpRemoteVerification
     *
     * @ElementName ftpRemoteVerification
     * @return bool|null
     */
    public function getFtpRemoteVerification()
    {
        return $this->ftpRemoteVerification;
    }

    /**
     * Setter for ftpRemoteVerification
     *
     * @ElementName ftpRemoteVerification
     * @param bool|null $ftpRemoteVerification
     * @return $this
     */
    public function setFtpRemoteVerification($ftpRemoteVerification)
    {
        $this->ftpRemoteVerification = $ftpRemoteVerification;
        return $this;
    }


}

