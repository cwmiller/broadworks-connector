<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingGetResponse
 *
 * Response to SystemPerformanceMeasurementReportingGetRequest.
 *         
 *         Replaced by: SystemPerformanceMeasurementReportingGetResponse22
 *
 * @see SystemPerformanceMeasurementReportingGetRequest
 * @see SystemPerformanceMeasurementReportingGetResponse22
 */
class SystemPerformanceMeasurementReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName reportingInterval
     * @Type int
     * @var int|null
     */
    private $reportingInterval = null;

    /**
     * @ElementName resetMeasurementsAfterEachReport
     * @Type bool
     * @var bool|null
     */
    private $resetMeasurementsAfterEachReport = null;

    /**
     * @ElementName reportEnterprise
     * @Type bool
     * @var bool|null
     */
    private $reportEnterprise = null;

    /**
     * @ElementName reportServiceProvider
     * @Type bool
     * @var bool|null
     */
    private $reportServiceProvider = null;

    /**
     * @ElementName reportDevice
     * @Type bool
     * @var bool|null
     */
    private $reportDevice = null;

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


}

