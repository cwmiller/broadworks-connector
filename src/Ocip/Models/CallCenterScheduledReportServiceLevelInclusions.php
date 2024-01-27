<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportServiceLevelInclusions
 *
 * The call center enhanced reporting scheduled report inclusions related to the Service Level thresholds
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7670","type":"sequence"}]
 */
class CallCenterScheduledReportServiceLevelInclusions
{
    /**
     * @ElementName includeOverflowTimeTransferedInServiceLevel
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7670
     * @var bool|null
     */
    protected $includeOverflowTimeTransferedInServiceLevel = null;

    /**
     * @ElementName includeOtherTransfersInServiceLevel
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7670
     * @var bool|null
     */
    protected $includeOtherTransfersInServiceLevel = null;

    /**
     * @ElementName abandonedCallsInServiceLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel
     * @Group 4d65d3449061c568639c8cc1e2492285:7670
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel|null
     */
    protected $abandonedCallsInServiceLevel = null;

    /**
     * @ElementName abandonedCallIntervalSeconds
     * @Type int
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7670
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $abandonedCallIntervalSeconds = null;

    /**
     * Getter for includeOverflowTimeTransferedInServiceLevel
     *
     * @return bool
     */
    public function getIncludeOverflowTimeTransferedInServiceLevel()
    {
        return $this->includeOverflowTimeTransferedInServiceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOverflowTimeTransferedInServiceLevel;
    }

    /**
     * Setter for includeOverflowTimeTransferedInServiceLevel
     *
     * @param bool $includeOverflowTimeTransferedInServiceLevel
     * @return $this
     */
    public function setIncludeOverflowTimeTransferedInServiceLevel($includeOverflowTimeTransferedInServiceLevel)
    {
        $this->includeOverflowTimeTransferedInServiceLevel = $includeOverflowTimeTransferedInServiceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOverflowTimeTransferedInServiceLevel()
    {
        $this->includeOverflowTimeTransferedInServiceLevel = null;
        return $this;
    }

    /**
     * Getter for includeOtherTransfersInServiceLevel
     *
     * @return bool
     */
    public function getIncludeOtherTransfersInServiceLevel()
    {
        return $this->includeOtherTransfersInServiceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOtherTransfersInServiceLevel;
    }

    /**
     * Setter for includeOtherTransfersInServiceLevel
     *
     * @param bool $includeOtherTransfersInServiceLevel
     * @return $this
     */
    public function setIncludeOtherTransfersInServiceLevel($includeOtherTransfersInServiceLevel)
    {
        $this->includeOtherTransfersInServiceLevel = $includeOtherTransfersInServiceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOtherTransfersInServiceLevel()
    {
        $this->includeOtherTransfersInServiceLevel = null;
        return $this;
    }

    /**
     * Getter for abandonedCallsInServiceLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel
     */
    public function getAbandonedCallsInServiceLevel()
    {
        return $this->abandonedCallsInServiceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallsInServiceLevel;
    }

    /**
     * Setter for abandonedCallsInServiceLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel $abandonedCallsInServiceLevel
     * @return $this
     */
    public function setAbandonedCallsInServiceLevel(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel $abandonedCallsInServiceLevel)
    {
        $this->abandonedCallsInServiceLevel = $abandonedCallsInServiceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallsInServiceLevel()
    {
        $this->abandonedCallsInServiceLevel = null;
        return $this;
    }

    /**
     * Getter for abandonedCallIntervalSeconds
     *
     * @return int
     */
    public function getAbandonedCallIntervalSeconds()
    {
        return $this->abandonedCallIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallIntervalSeconds;
    }

    /**
     * Setter for abandonedCallIntervalSeconds
     *
     * @param int $abandonedCallIntervalSeconds
     * @return $this
     */
    public function setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds)
    {
        $this->abandonedCallIntervalSeconds = $abandonedCallIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallIntervalSeconds()
    {
        $this->abandonedCallIntervalSeconds = null;
        return $this;
    }
}

