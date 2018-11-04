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
 */
class SystemCPEConfigModifyFileServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName ftpHostNetAddress
     * @var string|null
     */
    private $ftpHostNetAddress = null;

    /**
     * @ElementName ftpUserId
     * @var string|null
     */
    private $ftpUserId = null;

    /**
     * @ElementName ftpUserPassword
     * @var string|null
     */
    private $ftpUserPassword = null;

    /**
     * @ElementName cpeFileDirectory
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $cpeFileDirectory = null;

    /**
     * @ElementName passiveFTP
     * @var bool|null
     */
    private $passiveFTP = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for ftpHostNetAddress
     *
     * @ElementName ftpHostNetAddress
     * @return string|null
     */
    public function getFtpHostNetAddress()
    {
        return $this->ftpHostNetAddress;
    }

    /**
     * Setter for ftpHostNetAddress
     *
     * @ElementName ftpHostNetAddress
     * @param string|null $ftpHostNetAddress
     * @return $this
     */
    public function setFtpHostNetAddress($ftpHostNetAddress)
    {
        $this->ftpHostNetAddress = $ftpHostNetAddress;
        return $this;
    }

    /**
     * Getter for ftpUserId
     *
     * @ElementName ftpUserId
     * @return string|null
     */
    public function getFtpUserId()
    {
        return $this->ftpUserId;
    }

    /**
     * Setter for ftpUserId
     *
     * @ElementName ftpUserId
     * @param string|null $ftpUserId
     * @return $this
     */
    public function setFtpUserId($ftpUserId)
    {
        $this->ftpUserId = $ftpUserId;
        return $this;
    }

    /**
     * Getter for ftpUserPassword
     *
     * @ElementName ftpUserPassword
     * @return string|null
     */
    public function getFtpUserPassword()
    {
        return $this->ftpUserPassword;
    }

    /**
     * Setter for ftpUserPassword
     *
     * @ElementName ftpUserPassword
     * @param string|null $ftpUserPassword
     * @return $this
     */
    public function setFtpUserPassword($ftpUserPassword)
    {
        $this->ftpUserPassword = $ftpUserPassword;
        return $this;
    }

    /**
     * Getter for cpeFileDirectory
     *
     * @ElementName cpeFileDirectory
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory;
    }

    /**
     * Setter for cpeFileDirectory
     *
     * @ElementName cpeFileDirectory
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $cpeFileDirectory
     * @return $this
     */
    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $this->cpeFileDirectory = $cpeFileDirectory;
        return $this;
    }

    /**
     * Getter for passiveFTP
     *
     * @ElementName passiveFTP
     * @return bool|null
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP;
    }

    /**
     * Setter for passiveFTP
     *
     * @ElementName passiveFTP
     * @param bool|null $passiveFTP
     * @return $this
     */
    public function setPassiveFTP($passiveFTP)
    {
        $this->passiveFTP = $passiveFTP;
        return $this;
    }


}

