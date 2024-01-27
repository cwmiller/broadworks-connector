<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EmailAddressList
 *
 * A list of 50 email addresses is configured in the “Forward it to these e-mail addresses” section
 *          on the Voice Management configuration page
 *         
 *         Change History:
 *         R25.0 - Added
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2973","type":"sequence"}]
 */
class EmailAddressList
{
    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2973
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $emailAddress = [
        
    ];

    /**
     * Getter for emailAddress
     *
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string[] $emailAddress
     * @return $this
     */
    public function setEmailAddress(array $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailAddress()
    {
        $this->emailAddress = null;
        return $this;
    }

    /**
     * Adder for emailAddress
     *
     * @param string $emailAddress
     * @return $this
     */
    public function addEmailAddress(string $emailAddress)
    {
        $this->emailAddress[] = $emailAddress;
        return $this;
    }
}

