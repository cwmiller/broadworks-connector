<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringProfileReplacementList
 *
 * A list of communication barring profiles that replaces a previously configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1153","type":"sequence"}]
 */
class CommunicationBarringProfileReplacementList
{

    /**
     * @ElementName profileName
     * @Type string
     * @Array
     * @Group 8e629edbac315ae7889caca732382c44:1153
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

