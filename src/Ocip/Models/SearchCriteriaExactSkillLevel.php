<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSkillLevel
 *
 * Criteria for searching for a skill Level.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:1082","type":"sequence"}]
 */
class SearchCriteriaExactSkillLevel extends SearchCriteria
{

    /**
     * @ElementName skillLevel
     * @Type int
     * @Group d37849f5e289836ccd316323a7a3799a:1082
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

