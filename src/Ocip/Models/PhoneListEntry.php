<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PhoneListEntry
 *
 * Phone list entry.
 */
class PhoneListEntry
{

    /**
     * @ElementName entryName
     * @var string|null
     */
    private $entryName = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for entryName
     *
     * @ElementName entryName
     * @return string|null
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @ElementName entryName
     * @param string|null $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

