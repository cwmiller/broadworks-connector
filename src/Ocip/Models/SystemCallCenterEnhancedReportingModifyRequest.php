<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingModifyRequest
 *
 * Modify the system settings for call center enhanced reporting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6122","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName archiveReports
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6122
     * @var bool|null
     */
    private $archiveReports = null;

    /**
     * @ElementName reportApplicationURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6122
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reportApplicationURL = null;

    /**
     * @ElementName repositoryApplicationURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6122
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getReportApplicationURL()
    {
        return $this->reportApplicationURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportApplicationURL;
    }

    /**
     * Setter for reportApplicationURL
     *
     * @param string|null $reportApplicationURL
     * @return $this
     */
    public function setReportApplicationURL($reportApplicationURL = null)
    {
        if ($reportApplicationURL === null) {
            $this->reportApplicationURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reportApplicationURL = $reportApplicationURL;
        }
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
     * @return string|null
     */
    public function getRepositoryApplicationURL()
    {
        return $this->repositoryApplicationURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repositoryApplicationURL;
    }

    /**
     * Setter for repositoryApplicationURL
     *
     * @param string|null $repositoryApplicationURL
     * @return $this
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL = null)
    {
        if ($repositoryApplicationURL === null) {
            $this->repositoryApplicationURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->repositoryApplicationURL = $repositoryApplicationURL;
        }
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

