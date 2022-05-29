<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DialableCallerIDCriteriaPriorityOrder
 *
 * Dialable Caller ID routing order
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2420","type":"sequence"}]
 */
class DialableCallerIDCriteriaPriorityOrder
{

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2420
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $criteriaName = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2420
     * @MinInclusive 0.0
     * @MaxInclusive 1000000.0
     * @var float|null
     */
    protected $priority = null;

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
     * Getter for priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->priority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priority;
    }

    /**
     * Setter for priority
     *
     * @param float $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriority()
    {
        $this->priority = null;
        return $this;
    }


}

