<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSREmailNotify
 *
 * CommPilot Express SR Email Notify configuration used in the context of a get.
 */
class CommPilotExpressSREmailNotify
{

    /**
     * @ElementName sendEmail
     * @Type bool
     * @var bool|null
     */
    private $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @var string|null
     */
    private $emailAddress = null;

    /**
     * Getter for sendEmail
     *
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->sendEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendEmail;
    }

    /**
     * Setter for sendEmail
     *
     * @param bool $sendEmail
     * @return $this
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendEmail()
    {
        $this->sendEmail = null;
        return $this;
    }

    /**
     * Getter for emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
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


}

