<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementDNList
 *
 * A list of dns that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:897","type":"sequence"}]
 */
class ReplacementDNList
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Group 3f28429898a57a7f7846d3877b22df9f:897
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = array(
        
    );

    /**
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }


}

