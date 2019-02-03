<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CriteriaActivation
 *
 * Criteria active status indicator
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1763","type":"sequence"}]
 */
class CriteriaActivation
{

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1763
     * @var string|null
     */
    private $criteriaName = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1763
     * @var bool|null
     */
    private $isActive = null;

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

