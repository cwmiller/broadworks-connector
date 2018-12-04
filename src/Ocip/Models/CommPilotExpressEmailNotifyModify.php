<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressEmailNotifyModify
 *
 * CommPilot Express Email Notify configuration used in the context of a modify.
 *
 * @Groups [{"id":"3634139a4e18662a8fde423f112abbbc:189","type":"sequence"}]
 */
class CommPilotExpressEmailNotifyModify
{

    /**
     * @ElementName sendEmail
     * @Type bool
     * @Optional
     * @Group 3634139a4e18662a8fde423f112abbbc:189
     * @var bool|null
     */
    private $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3634139a4e18662a8fde423f112abbbc:189
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
    public function setEmailAddress($emailAddress)
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

