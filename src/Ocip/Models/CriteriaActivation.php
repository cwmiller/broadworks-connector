<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CriteriaActivation
 *
 * Criteria active status indicator
 */
class CriteriaActivation
{

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string|null
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string|null $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }


}

