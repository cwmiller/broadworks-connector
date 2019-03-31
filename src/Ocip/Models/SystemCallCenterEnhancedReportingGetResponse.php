<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingGetResponse
 *
 * Response to SystemCallCenterEnhancedReportingGetRequest.
 *
 * @see SystemCallCenterEnhancedReportingGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6104","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName archiveReports
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6104
     * @var bool|null
     */
    private $archiveReports = null;

    /**
     * @ElementName reportApplicationURL
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6104
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $reportApplicationURL = null;

    /**
     * @ElementName repositoryApplicationURL
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6104
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $repositoryApplicationURL = null;

    /**
     * Getter for archiveReports
     *
     * @return bool
     */
    public function getArchiveReports()
    {
        return $this->archiveReports instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->archiveReports;
    }

    /**
     * Setter for archiveReports
     *
     * @param bool $archiveReports
     * @return $this
     */
    public function setArchiveReports($archiveReports)
    {
        $this->archiveReports = $archiveReports;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetArchiveReports()
    {
        $this->archiveReports = null;
        return $this;
    }

    /**
     * Getter for reportApplicationURL
     *
     * @return string
     */
    public function getReportApplicationURL()
    {
        return $this->reportApplicationURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportApplicationURL;
    }

    /**
     * Setter for reportApplicationURL
     *
     * @param string $reportApplicationURL
     * @return $this
     */
    public function setReportApplicationURL($reportApplicationURL)
    {
        $this->reportApplicationURL = $reportApplicationURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportApplicationURL()
    {
        $this->reportApplicationURL = null;
        return $this;
    }

    /**
     * Getter for repositoryApplicationURL
     *
     * @return string
     */
    public function getRepositoryApplicationURL()
    {
        return $this->repositoryApplicationURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repositoryApplicationURL;
    }

    /**
     * Setter for repositoryApplicationURL
     *
     * @param string $repositoryApplicationURL
     * @return $this
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL)
    {
        $this->repositoryApplicationURL = $repositoryApplicationURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepositoryApplicationURL()
    {
        $this->repositoryApplicationURL = null;
        return $this;
    }


}

