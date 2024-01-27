<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementContactList
 *
 * A list of SIP contacts that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4396","type":"sequence"}]
 */
class ReplacementContactList
{
    /**
     * @ElementName contact
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4396
     * @MinLength 1
     * @MaxLength 1020
     * @var string[]
     */
    protected $contact = [
        
    ];

    /**
     * Getter for contact
     *
     * @return string[]
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string[] $contact
     * @return $this
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Adder for contact
     *
     * @param string $contact
     * @return $this
     */
    public function addContact(string $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }
}

