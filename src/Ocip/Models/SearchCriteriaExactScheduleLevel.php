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
     * @var string|null
     */
    private $level = null;

    /**
     * Getter for level
     *
     * @ElementName level
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Setter for level
     *
     * @ElementName level
     * @param string|null $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }


}

