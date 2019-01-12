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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12668","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingDeleteFileServerRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName repositoryUrl
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12668
     * @var string|null
     */
    private $repositoryUrl = null;

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

