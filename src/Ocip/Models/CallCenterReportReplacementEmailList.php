<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportReplacementEmailList
 *
 * A list of call center reporting email addresses that replaces a previously configured list.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7491","type":"sequence"}]
 */
class CallCenterReportReplacementEmailList
{
    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @Group 4d65d3449061c568639c8cc1e2492285:7491
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

