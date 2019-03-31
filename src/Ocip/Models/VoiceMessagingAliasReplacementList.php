<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingAliasReplacementList
 *
 * A list of dns that that replaces a previously configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3237","type":"sequence"}]
 */
class VoiceMessagingAliasReplacementList
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3237
     * @MinLength 1
     * @MaxLength 23
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

