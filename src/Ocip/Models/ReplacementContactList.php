<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementContactList
 *
 * A list of SIP contacts that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementContactList
{

    /**
     * @ElementName contact
     * @var string[]
     */
    private $contact = array(
        
    );

    /**
     * Getter for contact
     *
     * @ElementName contact
     * @return string[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Setter for contact
     *
     * @ElementName contact
     * @param string[] $contact
     * @return $this
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adder for contact
     *
     * @ElementName contact
     * @param string $contact
     * @return $this
     */
    public function addContact(string $contact)
    {
        $this->contact []= $contact;
        return $this;
    }


}

