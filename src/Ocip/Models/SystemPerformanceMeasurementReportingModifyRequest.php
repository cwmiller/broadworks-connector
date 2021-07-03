<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingModifyRequest
 *
 * Modify the performance measurements reporting settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14414","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName reportingInterval
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @MinInclusive 5
     * @MaxInclusive 45000
     * @var int|null
     */
    private $reportingInterval = null;

    /**
     * @ElementName resetMeasurementsAfterEachReport
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var bool|null
     */
    private $resetMeasurementsAfterEachReport = null;

    /**
     * @ElementName reportEnterprise
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var bool|null
     */
    private $reportEnterprise = null;

    /**
     * @ElementName reportServiceProvider
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var bool|null
     */
    private $reportServiceProvider = null;

    /**
     * @ElementName reportDevice
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var bool|null
     */
    private $reportDevice = null;

    /**
     * @ElementName reportTable
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var bool|null
     */
    private $reportTable = null;

    /**
     * @ElementName reportEncoding
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PerformanceMeasurementReportingEncoding
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14414
     * @var \CWM\BroadWorksConnector\Ocip\Models\PerformanceMeasurementReportingEncoding|null
     */
    private $reportEncoding = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for reportingInterval
     *
     * @return int
     */
    public function getReportingInterval()
    {
        return $this->reportingInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingInterval;
    }

    /**
     * Setter for reportingInterval
     *
     * @param int $reportingInterval
     * @return $this
     */
    public function setReportingInterval($reportingInterval)
    {
        $this->reportingInterval = $reportingInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingInterval()
    {
        $this->reportingInterval = null;
        return $this;
    }

    /**
     * Getter for resetMeasurementsAfterEachReport
     *
     * @return bool
     */
    public function getResetMeasurementsAfterEachReport()
    {
        return $this->resetMeasurementsAfterEachReport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resetMeasurementsAfterEachReport;
    }

    /**
     * Setter for resetMeasurementsAfterEachReport
     *
     * @param bool $resetMeasurementsAfterEachReport
     * @return $this
     */
    public function setResetMeasurementsAfterEachReport($resetMeasurementsAfterEachReport)
    {
        $this->resetMeasurementsAfterEachReport = $resetMeasurementsAfterEachReport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResetMeasurementsAfterEachReport()
    {
        $this->resetMeasurementsAfterEachReport = null;
        return $this;
    }

    /**
     * Getter for reportEnterprise
     *
     * @return bool
     */
    public function getReportEnterprise()
    {
        return $this->reportEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportEnterprise;
    }

    /**
     * Setter for reportEnterprise
     *
     * @param bool $reportEnterprise
     * @return $this
     */
    public function setReportEnterprise($reportEnterprise)
    {
        $this->reportEnterprise = $reportEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportEnterprise()
    {
        $this->reportEnterprise = null;
        return $this;
    }

    /**
     * Getter for reportServiceProvider
     *
     * @return bool
     */
    public function getReportServiceProvider()
    {
        return $this->reportServiceProvider instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportServiceProvider;
    }

    /**
     * Setter for reportServiceProvider
     *
     * @param bool $reportServiceProvider
     * @return $this
     */
    public function setReportServiceProvider($reportServiceProvider)
    {
        $this->reportServiceProvider = $reportServiceProvider;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportServiceProvider()
    {
        $this->reportServiceProvider = null;
        return $this;
    }

    /**
     * Getter for reportDevice
     *
     * @return bool
     */
    public function getReportDevice()
    {
        return $this->reportDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportDevice;
    }

    /**
     * Setter for reportDevice
     *
     * @param bool $reportDevice
     * @return $this
     */
    public function setReportDevice($reportDevice)
    {
        $this->reportDevice = $reportDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportDevice()
    {
        $this->reportDevice = null;
        return $this;
    }

    /**
     * Getter for reportTable
     *
     * @return bool
     */
    public function getReportTable()
    {
        return $this->reportTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportTable;
    }

    /**
     * Setter for reportTable
     *
     * @param bool $reportTable
     * @return $this
     */
    public function setReportTable($reportTable)
    {
        $this->reportTable = $reportTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportTable()
    {
        $this->reportTable = null;
        return $this;
    }

    /**
     * Getter for reportEncoding
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PerformanceMeasurementReportingEncoding
     */
    public function getReportEncoding()
    {
        return $this->reportEncoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportEncoding;
    }

    /**
     * Setter for reportEncoding
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PerformanceMeasurementReportingEncoding $reportEncoding
     * @return $this
     */
    public function setReportEncoding(\CWM\BroadWorksConnector\Ocip\Models\PerformanceMeasurementReportingEncoding $reportEncoding)
    {
        $this->reportEncoding = $reportEncoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportEncoding()
    {
        $this->reportEncoding = null;
        return $this;
    }


}

