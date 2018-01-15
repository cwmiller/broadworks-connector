<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringProfileReplacementList
 *
 * A list of communication barring profiles that replaces a previously configured
 * list.
 *         By convention, an element of this type may be set nil to clear the list.
 */
class CommunicationBarringProfileReplacementList
{

    /**
     * @ElementName profileName
     * @var string[]
     */
    private $profileName = array(
        
    );

    /**
     * Getter for profileName
     *
     * @ElementName profileName
     * @return string[]
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @ElementName profileName
     * @param string[] $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Adder for profileName
     *
     * @ElementName profileName
     * @param string $profileName
     * @return $this
     */
    public function addProfileName($profileName)
    {
        $this->profileName []= $profileName;
        return $this;
    }


}

