<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingDeleteFileServerRequest22
 *
 * Delete a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14491","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingDeleteFileServerRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14491
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $repositoryUrl = null;

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
}

