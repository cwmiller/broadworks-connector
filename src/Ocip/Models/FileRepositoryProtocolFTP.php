<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileRepositoryProtocolFTP
 *
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:39199","type":"sequence"}]
 */
class FileRepositoryProtocolFTP
{

    /**
     * @ElementName ftpPassive
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:39199
     * @var bool|null
     */
    private $ftpPassive = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:39199
     * @var string|null
     */
    private $netAddress = null;

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

