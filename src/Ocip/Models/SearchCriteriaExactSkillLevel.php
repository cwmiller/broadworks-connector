<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSkillLevel
 *
 * Criteria for searching for a skill Level.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1288","type":"sequence"}]
 */
class SearchCriteriaExactSkillLevel extends SearchCriteria
{
    /**
     * @ElementName skillLevel
     * @Type int
     * @Group 972fbf832439609ec8f2765c5637c3f1:1288
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $skillLevel = null;

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

