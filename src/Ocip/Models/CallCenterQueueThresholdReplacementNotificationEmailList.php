<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueThresholdReplacementNotificationEmailList
 *
 * List of email addresses to which the Call Center Queue Threshold email is sent. The list replaces a previously configured list.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6611","type":"sequence"}]
 */
class CallCenterQueueThresholdReplacementNotificationEmailList
{

    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6611
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

