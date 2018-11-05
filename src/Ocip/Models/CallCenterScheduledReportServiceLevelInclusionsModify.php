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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel|null
     */
    private $abandonedCallsInServiceLevel = null;

    /**
     * @ElementName abandonedCallIntervalSeconds
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel|null
     */
    public function getAbandonedCallsInServiceLevel()
    {
        return $this->abandonedCallsInServiceLevel;
    }

    /**
     * Setter for abandonedCallsInServiceLevel
     *
     * @ElementName abandonedCallsInServiceLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel|null $abandonedCallsInServiceLevel
     * @return $this
     */
    public function setAbandonedCallsInServiceLevel(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportAbadonedCallsInServiceLevel $abandonedCallsInServiceLevel)
    {
        $this->abandonedCallsInServiceLevel = $abandonedCallsInServiceLevel;
        return $this;
    }

    /**
     * Getter for abandonedCallIntervalSeconds
     *
     * @ElementName abandonedCallIntervalSeconds
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAbandonedCallIntervalSeconds()
    {
        return $this->abandonedCallIntervalSeconds;
    }

    /**
     * Setter for abandonedCallIntervalSeconds
     *
     * @ElementName abandonedCallIntervalSeconds
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $abandonedCallIntervalSeconds
     * @return $this
     */
    public function setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds)
    {
        $this->abandonedCallIntervalSeconds = $abandonedCallIntervalSeconds;
        return $this;
    }


}

