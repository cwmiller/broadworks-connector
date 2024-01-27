<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnterpriseTrunkGetResponse
 *
 * Response to SystemEnterpriseTrunkGetRequest.
 *
 * @see SystemEnterpriseTrunkGetRequest
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1680","type":"sequence"}]
 */
class SystemEnterpriseTrunkGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableHoldoverOfHighwaterCallCounts
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1680
     * @var bool|null
     */
    protected $enableHoldoverOfHighwaterCallCounts = null;

    /**
     * @ElementName holdoverPeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkHighwateCallCountHoldoverPeriodMinutes
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1680
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkHighwateCallCountHoldoverPeriodMinutes|null
     */
    protected $holdoverPeriod = null;

    /**
     * @ElementName timeZoneOffsetMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTimeZoneOffsetMinutes
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1680
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTimeZoneOffsetMinutes|null
     */
    protected $timeZoneOffsetMinutes = null;

    /**
     * Getter for enableHoldoverOfHighwaterCallCounts
     *
     * @return bool
     */
    public function getEnableHoldoverOfHighwaterCallCounts()
    {
        return $this->enableHoldoverOfHighwaterCallCounts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableHoldoverOfHighwaterCallCounts;
    }

    /**
     * Setter for enableHoldoverOfHighwaterCallCounts
     *
     * @param bool $enableHoldoverOfHighwaterCallCounts
     * @return $this
     */
    public function setEnableHoldoverOfHighwaterCallCounts($enableHoldoverOfHighwaterCallCounts)
    {
        $this->enableHoldoverOfHighwaterCallCounts = $enableHoldoverOfHighwaterCallCounts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableHoldoverOfHighwaterCallCounts()
    {
        $this->enableHoldoverOfHighwaterCallCounts = null;
        return $this;
    }

    /**
     * Getter for holdoverPeriod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkHighwateCallCountHoldoverPeriodMinutes
     */
    public function getHoldoverPeriod()
    {
        return $this->holdoverPeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdoverPeriod;
    }

    /**
     * Setter for holdoverPeriod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkHighwateCallCountHoldoverPeriodMinutes $holdoverPeriod
     * @return $this
     */
    public function setHoldoverPeriod(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkHighwateCallCountHoldoverPeriodMinutes $holdoverPeriod)
    {
        $this->holdoverPeriod = $holdoverPeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldoverPeriod()
    {
        $this->holdoverPeriod = null;
        return $this;
    }

    /**
     * Getter for timeZoneOffsetMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTimeZoneOffsetMinutes
     */
    public function getTimeZoneOffsetMinutes()
    {
        return $this->timeZoneOffsetMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneOffsetMinutes;
    }

    /**
     * Setter for timeZoneOffsetMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTimeZoneOffsetMinutes $timeZoneOffsetMinutes
     * @return $this
     */
    public function setTimeZoneOffsetMinutes(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTimeZoneOffsetMinutes $timeZoneOffsetMinutes)
    {
        $this->timeZoneOffsetMinutes = $timeZoneOffsetMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneOffsetMinutes()
    {
        $this->timeZoneOffsetMinutes = null;
        return $this;
    }
}

