<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportServiceLevelInclusionsModify
 *
 * The call center enhanced reporting scheduled report modified inclusions related
 * to the Service Level thresholds
 */
class CallCenterScheduledReportServiceLevelInclusionsModify
{

    /**
     * @ElementName includeOverflowTimeTransferedInServiceLevel
     * @var bool|null
     */
    private $includeOverflowTimeTransferedInServiceLevel = null;

    /**
     * @ElementName includeOtherTransfersInServiceLevel
     * @var bool|null
     */
    private $includeOtherTransfersInServiceLevel = null;

    /**
     * @ElementName abandonedCallsInServiceLevel
     * @var string|null
     */
    private $abandonedCallsInServiceLevel = null;

    /**
     * @ElementName abandonedCallIntervalSeconds
     * @var int|null
     */
    private $abandonedCallIntervalSeconds = null;

    /**
     * Getter for includeOverflowTimeTransferedInServiceLevel
     *
     * @ElementName includeOverflowTimeTransferedInServiceLevel
     * @return bool|null
     */
    public function getIncludeOverflowTimeTransferedInServiceLevel()
    {
        return $this->includeOverflowTimeTransferedInServiceLevel;
    }

    /**
     * Setter for includeOverflowTimeTransferedInServiceLevel
     *
     * @ElementName includeOverflowTimeTransferedInServiceLevel
     * @param bool|null $includeOverflowTimeTransferedInServiceLevel
     * @return $this
     */
    public function setIncludeOverflowTimeTransferedInServiceLevel($includeOverflowTimeTransferedInServiceLevel)
    {
        $this->includeOverflowTimeTransferedInServiceLevel = $includeOverflowTimeTransferedInServiceLevel;
        return $this;
    }

    /**
     * Getter for includeOtherTransfersInServiceLevel
     *
     * @ElementName includeOtherTransfersInServiceLevel
     * @return bool|null
     */
    public function getIncludeOtherTransfersInServiceLevel()
    {
        return $this->includeOtherTransfersInServiceLevel;
    }

    /**
     * Setter for includeOtherTransfersInServiceLevel
     *
     * @ElementName includeOtherTransfersInServiceLevel
     * @param bool|null $includeOtherTransfersInServiceLevel
     * @return $this
     */
    public function setIncludeOtherTransfersInServiceLevel($includeOtherTransfersInServiceLevel)
    {
        $this->includeOtherTransfersInServiceLevel = $includeOtherTransfersInServiceLevel;
        return $this;
    }

    /**
     * Getter for abandonedCallsInServiceLevel
     *
     * @ElementName abandonedCallsInServiceLevel
     * @return string|null
     */
    public function getAbandonedCallsInServiceLevel()
    {
        return $this->abandonedCallsInServiceLevel;
    }

    /**
     * Setter for abandonedCallsInServiceLevel
     *
     * @ElementName abandonedCallsInServiceLevel
     * @param string|null $abandonedCallsInServiceLevel
     * @return $this
     */
    public function setAbandonedCallsInServiceLevel($abandonedCallsInServiceLevel)
    {
        $this->abandonedCallsInServiceLevel = $abandonedCallsInServiceLevel;
        return $this;
    }

    /**
     * Getter for abandonedCallIntervalSeconds
     *
     * @ElementName abandonedCallIntervalSeconds
     * @return int|null
     */
    public function getAbandonedCallIntervalSeconds()
    {
        return $this->abandonedCallIntervalSeconds;
    }

    /**
     * Setter for abandonedCallIntervalSeconds
     *
     * @ElementName abandonedCallIntervalSeconds
     * @param int|null $abandonedCallIntervalSeconds
     * @return $this
     */
    public function setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds)
    {
        $this->abandonedCallIntervalSeconds = $abandonedCallIntervalSeconds;
        return $this;
    }


}

