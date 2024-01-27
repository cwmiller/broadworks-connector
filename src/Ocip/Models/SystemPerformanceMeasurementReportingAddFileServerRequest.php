<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingAddFileServerRequest
 *
 * Add a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28778","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingAddFileServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName ftpHostNetAddress
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:28778
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $ftpHostNetAddress = null;

    /**
     * @ElementName ftpUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:28778
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $ftpUserId = null;

    /**
     * @ElementName ftpUserPassword
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:28778
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $ftpUserPassword = null;

    /**
     * @ElementName passiveFTP
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:28778
     * @var bool|null
     */
    protected $passiveFTP = null;

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

