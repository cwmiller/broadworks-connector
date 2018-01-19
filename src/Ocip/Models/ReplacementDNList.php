<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementDNList
 *
 * A list of dns that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementDNList
{

    /**
     * @ElementName phoneNumber
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber($phoneNumber)
    {
        $this->phoneNumber []= $phoneNumber;
        return $this;
    }


}
