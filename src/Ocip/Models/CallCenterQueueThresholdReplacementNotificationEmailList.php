<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueThresholdReplacementNotificationEmailList
 *
 * List of email addresses to which the Call Center Queue Threshold email is sent. The list replaces a previously configured list.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7353","type":"sequence"}]
 */
class CallCenterQueueThresholdReplacementNotificationEmailList
{

    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @Group e2c537e3e39483b96620673a7012ffdd:7353
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $emailAddress = array(
        
    );

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

