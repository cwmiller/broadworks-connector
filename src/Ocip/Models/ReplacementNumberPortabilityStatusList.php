<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementNumberPortabilityStatusList
 *
 * A list of Number Portability Query Statuses that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3181","type":"sequence"}]
 */
class ReplacementNumberPortabilityStatusList
{

    /**
     * @ElementName status
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3181
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

