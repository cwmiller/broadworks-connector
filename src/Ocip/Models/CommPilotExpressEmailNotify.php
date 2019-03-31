<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressEmailNotify
 *
 * CommPilot Express Email Notify configuration used in the context of a get.
 *
 * @Groups [{"id":"8c204d784d1904d9eeea996d46de69be:177","type":"sequence"}]
 */
class CommPilotExpressEmailNotify
{

    /**
     * @ElementName sendEmail
     * @Type bool
     * @Group 8c204d784d1904d9eeea996d46de69be:177
     * @var bool|null
     */
    private $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:177
     * @MinLength 1
     * @MaxLength 80
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

