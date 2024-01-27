<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAliasListModify
 *
 * A list of dns that is added to a previously configured list.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50422","type":"sequence"}]
 */
class VoiceMessagingAliasListModify
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Group d8f04177e438f303b41c211e518706bf:50422
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = [
        
    ];

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

