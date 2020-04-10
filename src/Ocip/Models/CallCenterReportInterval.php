<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportInterval
 *
 * Report interval for call center enhanced reporting scheduled reports.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7433","type":"choice"}]
 */
class CallCenterReportInterval
{

    /**
     * @ElementName dates
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates
     * @Group e2c537e3e39483b96620673a7012ffdd:7433
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates|null
     */
    private $dates = null;

    /**
     * @ElementName current
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval
     * @Group e2c537e3e39483b96620673a7012ffdd:7433
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval|null
     */
    private $current = null;

    /**
     * @ElementName past
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval
     * @Group e2c537e3e39483b96620673a7012ffdd:7433
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval|null
     */
    private $past = null;

    /**
     * Getter for dates
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates
     */
    public function getDates()
    {
        return $this->dates instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dates;
    }

    /**
     * Setter for dates
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates $dates
     * @return $this
     */
    public function setDates(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates $dates)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDates()
    {
        $this->dates = null;
        return $this;
    }

    /**
     * Getter for current
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval
     */
    public function getCurrent()
    {
        return $this->current instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->current;
    }

    /**
     * Setter for current
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval $current
     * @return $this
     */
    public function setCurrent(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval $current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCurrent()
    {
        $this->current = null;
        return $this;
    }

    /**
     * Getter for past
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval
     */
    public function getPast()
    {
        return $this->past instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->past;
    }

    /**
     * Setter for past
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval $past
     * @return $this
     */
    public function setPast(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval $past)
    {
        $this->past = $past;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPast()
    {
        $this->past = null;
        return $this;
    }


}

