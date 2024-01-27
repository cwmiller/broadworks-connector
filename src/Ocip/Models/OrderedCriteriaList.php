<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OrderedCriteriaList
 *
 * A list of criteria names that defines the order priority.
 *
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:509","type":"sequence"}]
 */
class OrderedCriteriaList
{
    /**
     * @ElementName criteriaName
     * @Type string
     * @Array
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:509
     * @MinLength 1
     * @MaxLength 50
     * @var string[]
     */
    protected $criteriaName = [
        
    ];

    /**
     * Getter for criteriaName
     *
     * @return string[]
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string[] $criteriaName
     * @return $this
     */
    public function setCriteriaName(array $criteriaName)
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
     * Adder for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function addCriteriaName(string $criteriaName)
    {
        $this->criteriaName[] = $criteriaName;
        return $this;
    }
}

