<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringProfileReplacementList
 *
 * A list of communication barring profiles that replaces a previously configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1552","type":"sequence"}]
 */
class CommunicationBarringProfileReplacementList
{
    /**
     * @ElementName profileName
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1552
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $profileName = [
        
    ];

    /**
     * Getter for profileName
     *
     * @return string[]
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string[] $profileName
     * @return $this
     */
    public function setProfileName(array $profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileName()
    {
        $this->profileName = null;
        return $this;
    }

    /**
     * Adder for profileName
     *
     * @param string $profileName
     * @return $this
     */
    public function addProfileName(string $profileName)
    {
        $this->profileName[] = $profileName;
        return $this;
    }
}

