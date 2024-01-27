<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigModifyFileServerRequest
 *
 * Modify a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigModifyFileServerRequest14sp6
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCPEConfigModifyFileServerRequest14sp6
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:25810","type":"sequence"}]
 */
class SystemCPEConfigModifyFileServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:25810
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName ftpHostNetAddress
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:25810
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $ftpHostNetAddress = null;

    /**
     * @ElementName ftpUserId
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:25810
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $ftpUserId = null;

    /**
     * @ElementName ftpUserPassword
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:25810
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $ftpUserPassword = null;

    /**
     * @ElementName cpeFileDirectory
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:25810
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $cpeFileDirectory = null;

    /**
     * @ElementName passiveFTP
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:25810
     * @var bool|null
     */
    protected $passiveFTP = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for ftpHostNetAddress
     *
     * @return string
     */
    public function getFtpHostNetAddress()
    {
        return $this->ftpHostNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpHostNetAddress;
    }

    /**
     * Setter for ftpHostNetAddress
     *
     * @param string $ftpHostNetAddress
     * @return $this
     */
    public function setFtpHostNetAddress($ftpHostNetAddress)
    {
        $this->ftpHostNetAddress = $ftpHostNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpHostNetAddress()
    {
        $this->ftpHostNetAddress = null;
        return $this;
    }

    /**
     * Getter for ftpUserId
     *
     * @return string
     */
    public function getFtpUserId()
    {
        return $this->ftpUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpUserId;
    }

    /**
     * Setter for ftpUserId
     *
     * @param string $ftpUserId
     * @return $this
     */
    public function setFtpUserId($ftpUserId)
    {
        $this->ftpUserId = $ftpUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpUserId()
    {
        $this->ftpUserId = null;
        return $this;
    }

    /**
     * Getter for ftpUserPassword
     *
     * @return string
     */
    public function getFtpUserPassword()
    {
        return $this->ftpUserPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpUserPassword;
    }

    /**
     * Setter for ftpUserPassword
     *
     * @param string $ftpUserPassword
     * @return $this
     */
    public function setFtpUserPassword($ftpUserPassword)
    {
        $this->ftpUserPassword = $ftpUserPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpUserPassword()
    {
        $this->ftpUserPassword = null;
        return $this;
    }

    /**
     * Getter for cpeFileDirectory
     *
     * @return string|null
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @param string|null $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        if ($cpeFileDirectory === null) {
            $this->cpeFileDirectory = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->cpeFileDirectory = $cpeFileDirectory;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpeFileDirectory()
    {
        $this->cpeFileDirectory = null;
        return $this;
    }

    /**
     * Getter for passiveFTP
     *
     * @return bool
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passiveFTP;
    }

    /**
     * Setter for passiveFTP
     *
     * @param bool $passiveFTP
     * @return $this
     */
    public function setPassiveFTP($passiveFTP)
    {
        $this->passiveFTP = $passiveFTP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassiveFTP()
    {
        $this->passiveFTP = null;
        return $this;
    }
}

