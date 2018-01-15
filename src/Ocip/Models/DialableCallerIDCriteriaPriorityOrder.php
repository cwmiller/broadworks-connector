<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DialableCallerIDCriteriaPriorityOrder
 *
 * Dialable Caller ID routing order
 */
class DialableCallerIDCriteriaPriorityOrder
{

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

    /**
     * @ElementName priority
     * @var float|null
     */
    private $priority = null;

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
     * Getter for priority
     *
     * @ElementName priority
     * @return float|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param float|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }


}

