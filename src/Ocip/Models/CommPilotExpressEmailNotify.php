<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressEmailNotify
 *
 * CommPilot Express Email Notify configuration used in the context of a get.
 *
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:177","type":"sequence"}]
 */
class CommPilotExpressEmailNotify
{
    /**
     * @ElementName sendEmail
     * @Type bool
     * @Group de7795e1833d459a7eb89116d772fd78:177
     * @var bool|null
     */
    protected $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:177
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $emailAddress = null;

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

