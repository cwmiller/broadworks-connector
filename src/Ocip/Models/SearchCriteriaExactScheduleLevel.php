<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleLevel
 *
 * Criteria for searching for a particular schedule level.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1198","type":"sequence"}]
 */
class SearchCriteriaExactScheduleLevel extends SearchCriteria
{
    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @Group 972fbf832439609ec8f2765c5637c3f1:1198
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    protected $level = null;

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

