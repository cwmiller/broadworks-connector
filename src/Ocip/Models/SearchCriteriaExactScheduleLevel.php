<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleLevel
 *
 * Criteria for searching for a particular schedule level.
 */
class SearchCriteriaExactScheduleLevel extends SearchCriteria
{

    /**
     * @ElementName level
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    private $level = null;

    /**
     * Getter for level
     *
     * @ElementName level
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Setter for level
     *
     * @ElementName level
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $level)
    {
        $this->level = $level;
        return $this;
    }


}

