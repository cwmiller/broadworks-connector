<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingGetResponse
 *
 * Response to SystemCallCenterEnhancedReportingGetRequest.
 */
class SystemCallCenterEnhancedReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName archiveReports
     * @var bool|null
     */
    private $archiveReports = null;

    /**
     * @ElementName reportApplicationURL
     * @var string|null
     */
    private $reportApplicationURL = null;

    /**
     * @ElementName repositoryApplicationURL
     * @var string|null
     */
    private $repositoryApplicationURL = null;

    /**
     * Getter for archiveReports
     *
     * @ElementName archiveReports
     * @return bool|null
     */
    public function getArchiveReports()
    {
        return $this->archiveReports;
    }

    /**
     * Setter for archiveReports
     *
     * @ElementName archiveReports
     * @param bool|null $archiveReports
     * @return $this
     */
    public function setArchiveReports($archiveReports)
    {
        $this->archiveReports = $archiveReports;
        return $this;
    }

    /**
     * Getter for reportApplicationURL
     *
     * @ElementName reportApplicationURL
     * @return string|null
     */
    public function getReportApplicationURL()
    {
        return $this->reportApplicationURL;
    }

    /**
     * Setter for reportApplicationURL
     *
     * @ElementName reportApplicationURL
     * @param string|null $reportApplicationURL
     * @return $this
     */
    public function setReportApplicationURL($reportApplicationURL)
    {
        $this->reportApplicationURL = $reportApplicationURL;
        return $this;
    }

    /**
     * Getter for repositoryApplicationURL
     *
     * @ElementName repositoryApplicationURL
     * @return string|null
     */
    public function getRepositoryApplicationURL()
    {
        return $this->repositoryApplicationURL;
    }

    /**
     * Setter for repositoryApplicationURL
     *
     * @ElementName repositoryApplicationURL
     * @param string|null $repositoryApplicationURL
     * @return $this
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL)
    {
        $this->repositoryApplicationURL = $repositoryApplicationURL;
        return $this;
    }


}

