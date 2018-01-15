<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentThresholdProfileReplacementNotificationEmailList
 *
 * List of email addresses to which the Agent Threshold Profile email is sent. The
 * list replaces a previously configured list.
 */
class CallCenterAgentThresholdProfileReplacementNotificationEmailList
{

    /**
     * @ElementName emailAddress
     * @var string[]
     */
    private $emailAddress = array(
        
    );

    /**
     * Getter for emailAddress
     *
     * @ElementName emailAddress
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @ElementName emailAddress
     * @param string[] $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Adder for emailAddress
     *
     * @ElementName emailAddress
     * @param string $emailAddress
     * @return $this
     */
    public function addEmailAddress($emailAddress)
    {
        $this->emailAddress []= $emailAddress;
        return $this;
    }


}

