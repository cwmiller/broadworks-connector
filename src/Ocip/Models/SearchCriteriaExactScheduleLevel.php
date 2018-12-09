<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactScheduleLevel
 *
 * Criteria for searching for a particular schedule level.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:992","type":"sequence"}]
 */
class SearchCriteriaExactScheduleLevel extends SearchCriteria
{

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:992
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

