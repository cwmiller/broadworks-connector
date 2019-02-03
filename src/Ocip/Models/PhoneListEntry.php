<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PhoneListEntry
 *
 * Phone list entry.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2930","type":"sequence"}]
 */
class PhoneListEntry
{

    /**
     * @ElementName entryName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2930
     * @var string|null
     */
    private $entryName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2930
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for entryName
     *
     * @return string
     */
    public function getEntryName()
    {
        return $this->entryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @param string $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntryName()
    {
        $this->entryName = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
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


}

