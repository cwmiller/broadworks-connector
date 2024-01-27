<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingModifyFileServerRequest22
 *
 * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14573","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14573
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $repositoryUrl = null;

    /**
     * @ElementName passiveFTP
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14573
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

