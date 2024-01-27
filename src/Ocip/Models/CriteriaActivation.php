<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CriteriaActivation
 *
 * Criteria active status indicator
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2139","type":"sequence"}]
 */
class CriteriaActivation
{
    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2139
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2139
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * Getter for criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }
}

