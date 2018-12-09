<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DialableCallerIDCriteriaPriorityOrder
 *
 * Dialable Caller ID routing order
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1779","type":"sequence"}]
 */
class DialableCallerIDCriteriaPriorityOrder
{

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1779
     * @var string|null
     */
    private $criteriaName = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group 8e629edbac315ae7889caca732382c44:1779
     * @var float|null
     */
    private $priority = null;

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

