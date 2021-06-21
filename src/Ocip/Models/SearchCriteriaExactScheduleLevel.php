<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleLevel
 *
 * Criteria for searching for a particular schedule level.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1164","type":"sequence"}]
 */
class SearchCriteriaExactScheduleLevel extends SearchCriteria
{

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @Group f0ada2681ca347fa83b464734259b304:1164
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    private $level = null;

    /**
     * Getter for level
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     */
    public function getLevel()
    {
        return $this->level instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->level;
    }

    /**
     * Setter for level
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLevel()
    {
        $this->level = null;
        return $this;
    }


}

