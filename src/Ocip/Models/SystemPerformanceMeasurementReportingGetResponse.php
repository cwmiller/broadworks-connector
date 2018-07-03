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
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName reportingInterval
     * @var int|null
     */
    private $reportingInterval = null;

    /**
     * @ElementName resetMeasurementsAfterEachReport
     * @var bool|null
     */
    private $resetMeasurementsAfterEachReport = null;

    /**
     * @ElementName reportEnterprise
     * @var bool|null
     */
    private $reportEnterprise = null;

    /**
     * @ElementName reportServiceProvider
     * @var bool|null
     */
    private $reportServiceProvider = null;

    /**
     * @ElementName reportDevice
     * @var bool|null
     */
    private $reportDevice = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for reportingInterval
     *
     * @ElementName reportingInterval
     * @return int|null
     */
    public function getReportingInterval()
    {
        return $this->reportingInterval;
    }

    /**
     * Setter for reportingInterval
     *
     * @ElementName reportingInterval
     * @param int|null $reportingInterval
     * @return $this
     */
    public function setReportingInterval($reportingInterval)
    {
        $this->reportingInterval = $reportingInterval;
        return $this;
    }

    /**
     * Getter for resetMeasurementsAfterEachReport
     *
     * @ElementName resetMeasurementsAfterEachReport
     * @return bool|null
     */
    public function getResetMeasurementsAfterEachReport()
    {
        return $this->resetMeasurementsAfterEachReport;
    }

    /**
     * Setter for resetMeasurementsAfterEachReport
     *
     * @ElementName resetMeasurementsAfterEachReport
     * @param bool|null $resetMeasurementsAfterEachReport
     * @return $this
     */
    public function setResetMeasurementsAfterEachReport($resetMeasurementsAfterEachReport)
    {
        $this->resetMeasurementsAfterEachReport = $resetMeasurementsAfterEachReport;
        return $this;
    }

    /**
     * Getter for reportEnterprise
     *
     * @ElementName reportEnterprise
     * @return bool|null
     */
    public function getReportEnterprise()
    {
        return $this->reportEnterprise;
    }

    /**
     * Setter for reportEnterprise
     *
     * @ElementName reportEnterprise
     * @param bool|null $reportEnterprise
     * @return $this
     */
    public function setReportEnterprise($reportEnterprise)
    {
        $this->reportEnterprise = $reportEnterprise;
        return $this;
    }

    /**
     * Getter for reportServiceProvider
     *
     * @ElementName reportServiceProvider
     * @return bool|null
     */
    public function getReportServiceProvider()
    {
        return $this->reportServiceProvider;
    }

    /**
     * Setter for reportServiceProvider
     *
     * @ElementName reportServiceProvider
     * @param bool|null $reportServiceProvider
     * @return $this
     */
    public function setReportServiceProvider($reportServiceProvider)
    {
        $this->reportServiceProvider = $reportServiceProvider;
        return $this;
    }

    /**
     * Getter for reportDevice
     *
     * @ElementName reportDevice
     * @return bool|null
     */
    public function getReportDevice()
    {
        return $this->reportDevice;
    }

    /**
     * Setter for reportDevice
     *
     * @ElementName reportDevice
     * @param bool|null $reportDevice
     * @return $this
     */
    public function setReportDevice($reportDevice)
    {
        $this->reportDevice = $reportDevice;
        return $this;
    }


}

