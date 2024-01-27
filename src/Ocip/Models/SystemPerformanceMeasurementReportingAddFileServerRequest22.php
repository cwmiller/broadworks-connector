<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingAddFileServerRequest22
 *
 * Add a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14472","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingAddFileServerRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14472
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $repositoryUrl = null;

    /**
     * @ElementName ftpUserId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14472
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $ftpUserId = null;

    /**
     * @ElementName ftpUserPassword
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14472
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $ftpUserPassword = null;

    /**
     * @ElementName passiveFTP
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14472
     * @var bool|null
     */
    protected $passiveFTP = null;

    /**
     * Getter for repositoryUrl
     *
     * @return string
     */
    public function getRepositoryUrl()
    {
        return $this->repositoryUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repositoryUrl;
    }

    /**
     * Setter for repositoryUrl
     *
     * @param string $repositoryUrl
     * @return $this
     */
    public function setRepositoryUrl($repositoryUrl)
    {
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepositoryUrl()
    {
        $this->repositoryUrl = null;
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

