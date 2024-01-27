<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementContactList22
 *
 * A list of SIP contacts that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4408","type":"sequence"}]
 */
class ReplacementContactList22
{
    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4408
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[]
     */
    protected $contact = [
        
    ];

    /**
     * Getter for contact
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[]
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[] $contact
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }
}

