<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringProfileReplacementList
 *
 * A list of communication barring profiles that replaces a previously configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1503","type":"sequence"}]
 */
class CommunicationBarringProfileReplacementList
{

    /**
     * @ElementName profileName
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1503
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $profileName = array(
        
    );

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

