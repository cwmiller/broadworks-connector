<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressEmailNotifyModify
 *
 * CommPilot Express Email Notify configuration used in the context of a modify.
 *
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:189","type":"sequence"}]
 */
class CommPilotExpressEmailNotifyModify
{
    /**
     * @ElementName sendEmail
     * @Type bool
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:189
     * @var bool|null
     */
    protected $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:189
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string|null $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress = null)
    {
        if ($emailAddress === null) {
            $this->emailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emailAddress = $emailAddress;
        }
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

