<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSkillLevel
 *
 * Criteria for searching for a skill Level.
 */
class SearchCriteriaExactSkillLevel extends SearchCriteria
{

    /**
     * @ElementName skillLevel
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * Getter for skillLevel
     *
     * @ElementName skillLevel
     * @return int|null
     */
    public function getSkillLevel()
    {
        return $this->skillLevel;
    }

    /**
     * Setter for skillLevel
     *
     * @ElementName skillLevel
     * @param int|null $skillLevel
     * @return $this
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;
        return $this;
    }


}

