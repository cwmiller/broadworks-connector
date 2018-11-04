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
 */
class SystemCallCenterEnhancedReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName archiveReports
     * @var bool|null
     */
    private $archiveReports = null;

    /**
     * @ElementName reportApplicationURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $reportApplicationURL = null;

    /**
     * @ElementName repositoryApplicationURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getReportApplicationURL()
    {
        return $this->reportApplicationURL;
    }

    /**
     * Setter for reportApplicationURL
     *
     * @ElementName reportApplicationURL
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $reportApplicationURL
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRepositoryApplicationURL()
    {
        return $this->repositoryApplicationURL;
    }

    /**
     * Setter for repositoryApplicationURL
     *
     * @ElementName repositoryApplicationURL
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $repositoryApplicationURL
     * @return $this
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL)
    {
        $this->repositoryApplicationURL = $repositoryApplicationURL;
        return $this;
    }


}

