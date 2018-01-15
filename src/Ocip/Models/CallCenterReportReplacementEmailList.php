<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportReplacementEmailList
 *
 * A list of call center reporting email addresses that replaces a previously
 * configured list.
 */
class CallCenterReportReplacementEmailList
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

