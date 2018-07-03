<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceModifyRequest
 *
 * Modify a file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemFileRepositoryDeviceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName rootDirectory
     * @var string|null
     */
    private $rootDirectory = null;

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
     * @ElementName ftpPassive
     * @var bool|null
     */
    private $ftpPassive = null;

    /**
     * @ElementName protocol
     * @var string|null
     */
    private $protocol = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName ftpRemoteVerification
     * @var bool|null
     */
    private $ftpRemoteVerification = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for rootDirectory
     *
     * @ElementName rootDirectory
     * @return string|null
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory;
    }

    /**
     * Setter for rootDirectory
     *
     * @ElementName rootDirectory
     * @param string|null $rootDirectory
     * @return $this
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

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
     * Getter for protocol
     *
     * @ElementName protocol
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Setter for protocol
     *
     * @ElementName protocol
     * @param string|null $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
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

