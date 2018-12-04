<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAliasListModify
 *
 * A list of dns that is added to a previously configured list.
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:3099","type":"sequence"}]
 */
class VoiceMessagingAliasListModify
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Group 1624846b7d87d3ab55e907c443fca9d6:3099
     * @var string[]
     */
    private $phoneNumber = array(
        
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

