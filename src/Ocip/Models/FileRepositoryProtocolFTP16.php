<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolFTP16
 *
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2373","type":"sequence"}]
 */
class FileRepositoryProtocolFTP16
{

    /**
     * @ElementName ftpPassive
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2373
     * @var bool|null
     */
    private $ftpPassive = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2373
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName ftpRemoteVerification
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2373
     * @var bool|null
     */
    private $ftpRemoteVerification = null;

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

    /**
     * Getter for ftpRemoteVerification
     *
     * @return bool
     */
    public function getFtpRemoteVerification()
    {
        return $this->ftpRemoteVerification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpRemoteVerification;
    }

    /**
     * Setter for ftpRemoteVerification
     *
     * @param bool $ftpRemoteVerification
     * @return $this
     */
    public function setFtpRemoteVerification($ftpRemoteVerification)
    {
        $this->ftpRemoteVerification = $ftpRemoteVerification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpRemoteVerification()
    {
        $this->ftpRemoteVerification = null;
        return $this;
    }


}

