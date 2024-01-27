<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementNumberPortabilityStatusList
 *
 * A list of Number Portability Query Statuses that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4445","type":"sequence"}]
 */
class ReplacementNumberPortabilityStatusList
{
    /**
     * @ElementName status
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4445
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $status = [
        
    ];

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

