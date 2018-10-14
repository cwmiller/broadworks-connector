<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementNumberPortabilityStatusList
 *
 * A list of Number Portability Query Statuses that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 */
class ReplacementNumberPortabilityStatusList
{

    /**
     * @ElementName status
     * @var string[]
     */
    private $status = array(
        
    );

    /**
     * Getter for status
     *
     * @ElementName status
     * @return string[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for status
     *
     * @ElementName status
     * @param string[] $status
     * @return $this
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adder for status
     *
     * @ElementName status
     * @param string $status
     * @return $this
     */
    public function addStatus(string $status)
    {
        $this->status []= $status;
        return $this;
    }


}

