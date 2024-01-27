<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallingNameRetrievalWhiteListReplacementList
 *
 * A list of DNs to add to the CNAM call filtering DN white list.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1098","type":"sequence"}]
 */
class CallingNameRetrievalWhiteListReplacementList
{
    /**
     * @ElementName number
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1098
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $number = [
        
    ];

    /**
     * Getter for number
     *
     * @return string[]
     */
    public function getNumber()
    {
        return $this->number instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->number;
    }

    /**
     * Setter for number
     *
     * @param string[] $number
     * @return $this
     */
    public function setNumber(array $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumber()
    {
        $this->number = null;
        return $this;
    }

    /**
     * Adder for number
     *
     * @param string $number
     * @return $this
     */
    public function addNumber(string $number)
    {
        $this->number[] = $number;
        return $this;
    }
}

