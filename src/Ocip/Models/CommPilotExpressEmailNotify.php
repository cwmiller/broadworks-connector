<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressEmailNotify
 *
 * CommPilot Express Email Notify configuration used in the context of a get.
 */
class CommPilotExpressEmailNotify
{

    /**
     * @ElementName sendEmail
     * @var bool|null
     */
    private $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @var string|null
     */
    private $emailAddress = null;

    /**
     * Getter for sendEmail
     *
     * @ElementName sendEmail
     * @return bool|null
     */
    public function getSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * Setter for sendEmail
     *
     * @ElementName sendEmail
     * @param bool|null $sendEmail
     * @return $this
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * Getter for emailAddress
     *
     * @ElementName emailAddress
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @ElementName emailAddress
     * @param string|null $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }


}

