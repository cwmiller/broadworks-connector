<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportInterval
 *
 * Report interval for call center enhanced reporting scheduled reports.
 */
class CallCenterReportInterval
{

    /**
     * @ElementName dates
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates|null
     */
    private $dates = null;

    /**
     * @ElementName current
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval|null
     */
    private $current = null;

    /**
     * @ElementName past
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval|null
     */
    private $past = null;

    /**
     * Getter for dates
     *
     * @ElementName dates
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates|null
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Setter for dates
     *
     * @ElementName dates
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates|null $dates
     * @return $this
     */
    public function setDates(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportIntervalDates $dates)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * Getter for current
     *
     * @ElementName current
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval|null
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Setter for current
     *
     * @ElementName current
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval|null $current
     * @return $this
     */
    public function setCurrent(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportCurrentInterval $current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * Getter for past
     *
     * @ElementName past
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval|null
     */
    public function getPast()
    {
        return $this->past;
    }

    /**
     * Setter for past
     *
     * @ElementName past
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval|null $past
     * @return $this
     */
    public function setPast(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportPastInterval $past)
    {
        $this->past = $past;
        return $this;
    }


}

