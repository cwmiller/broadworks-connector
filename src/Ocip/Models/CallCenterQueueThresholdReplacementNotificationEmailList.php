<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterQueueThresholdReplacementNotificationEmailList
 *
 * List of email addresses to which the Call Center Queue Threshold email is sent. The list replaces a previously configured list.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6611","type":"sequence"}]
 */
class CallCenterQueueThresholdReplacementNotificationEmailList
{

    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6611
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

