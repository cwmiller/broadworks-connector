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
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6076","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName archiveReports
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6076
     * @var bool|null
     */
    protected $archiveReports = null;

    /**
     * @ElementName reportApplicationURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6076
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $reportApplicationURL = null;

    /**
     * @ElementName repositoryApplicationURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6076
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repositoryApplicationURL = null;

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

