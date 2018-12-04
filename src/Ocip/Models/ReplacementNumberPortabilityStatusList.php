<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementNumberPortabilityStatusList
 *
 * A list of Number Portability Query Statuses that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2913","type":"sequence"}]
 */
class ReplacementNumberPortabilityStatusList
{

    /**
     * @ElementName status
     * @Type string
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2913
     * @var string[]
     */
    private $status = array(
        
    );

    /**
     * Getter for status
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param string[] $status
     * @return $this
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }

    /**
     * Adder for status
     *
     * @param string $status
     * @return $this
     */
    public function addStatus(string $status)
    {
        $this->status[] = $status;
        return $this;
    }


}

