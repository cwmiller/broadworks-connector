<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressEmailNotifyModify
 *
 * CommPilot Express Email Notify configuration used in the context of a modify.
 */
class CommPilotExpressEmailNotifyModify
{

    /**
     * @ElementName sendEmail
     * @var bool|null
     */
    private $sendEmail = null;

    /**
     * @ElementName emailAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @ElementName emailAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }


}

