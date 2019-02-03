<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementContactList
 *
 * A list of SIP contacts that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3281","type":"sequence"}]
 */
class ReplacementContactList
{

    /**
     * @ElementName contact
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3281
     * @var string[]
     */
    private $contact = array(
        
    );

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

