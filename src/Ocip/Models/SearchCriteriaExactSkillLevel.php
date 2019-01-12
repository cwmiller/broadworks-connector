<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSkillLevel
 *
 * Criteria for searching for a skill Level.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1165","type":"sequence"}]
 */
class SearchCriteriaExactSkillLevel extends SearchCriteria
{

    /**
     * @ElementName skillLevel
     * @Type int
     * @Group f0ada2681ca347fa83b464734259b304:1165
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * Getter for skillLevel
     *
     * @return int
     */
    public function getSkillLevel()
    {
        return $this->skillLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skillLevel;
    }

    /**
     * Setter for skillLevel
     *
     * @param int $skillLevel
     * @return $this
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkillLevel()
    {
        $this->skillLevel = null;
        return $this;
    }


}

