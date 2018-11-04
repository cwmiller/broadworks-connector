<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalModifyRequest
 *
 * Request to update a System  Voice portal instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSystemVoicePortalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @var string|null
     */
    private $systemVoicePortalId = null;

    /**
     * @ElementName newSystemVoicePortalId
     * @var string|null
     */
    private $newSystemVoicePortalId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName callingLineIdName
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName phoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName publicUserIdentity
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName networkVoicePortalNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkVoicePortalNumber = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @var bool|null
     */
    private $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @var bool|null
     */
    private $useVoicePortalWizard = null;

    /**
     * @ElementName becomeDefaultSystemVoicePortal
     * @var bool|null
     */
    private $becomeDefaultSystemVoicePortal = null;

    /**
     * @ElementName useVoicePortalDefaultGreeting
     * @var bool|null
     */
    private $useVoicePortalDefaultGreeting = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName useVoiceMessagingDefaultGreeting
     * @var bool|null
     */
    private $useVoiceMessagingDefaultGreeting = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voiceMessagingGreetingFile = null;

    /**
     * @ElementName expressMode
     * @var bool|null
     */
    private $expressMode = null;

    /**
     * Getter for systemVoicePortalId
     *
     * @ElementName systemVoicePortalId
     * @return string|null
     */
    public function getSystemVoicePortalId()
    {
        return $this->systemVoicePortalId;
    }

    /**
     * Setter for systemVoicePortalId
     *
     * @ElementName systemVoicePortalId
     * @param string|null $systemVoicePortalId
     * @return $this
     */
    public function setSystemVoicePortalId($systemVoicePortalId)
    {
        $this->systemVoicePortalId = $systemVoicePortalId;
        return $this;
    }

    /**
     * Getter for newSystemVoicePortalId
     *
     * @ElementName newSystemVoicePortalId
     * @return string|null
     */
    public function getNewSystemVoicePortalId()
    {
        return $this->newSystemVoicePortalId;
    }

    /**
     * Setter for newSystemVoicePortalId
     *
     * @ElementName newSystemVoicePortalId
     * @param string|null $newSystemVoicePortalId
     * @return $this
     */
    public function setNewSystemVoicePortalId($newSystemVoicePortalId)
    {
        $this->newSystemVoicePortalId = $newSystemVoicePortalId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @ElementName timeZone
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @ElementName timeZone
     * @param string|null $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity($publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
        return $this;
    }

    /**
     * Getter for networkVoicePortalNumber
     *
     * @ElementName networkVoicePortalNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkVoicePortalNumber()
    {
        return $this->networkVoicePortalNumber;
    }

    /**
     * Setter for networkVoicePortalNumber
     *
     * @ElementName networkVoicePortalNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkVoicePortalNumber
     * @return $this
     */
    public function setNetworkVoicePortalNumber($networkVoicePortalNumber)
    {
        $this->networkVoicePortalNumber = $networkVoicePortalNumber;
        return $this;
    }

    /**
     * Getter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @return bool|null
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    }

    /**
     * Setter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @param bool|null $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @return $this
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
        return $this;
    }

    /**
     * Getter for useVoicePortalWizard
     *
     * @ElementName useVoicePortalWizard
     * @return bool|null
     */
    public function getUseVoicePortalWizard()
    {
        return $this->useVoicePortalWizard;
    }

    /**
     * Setter for useVoicePortalWizard
     *
     * @ElementName useVoicePortalWizard
     * @param bool|null $useVoicePortalWizard
     * @return $this
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard)
    {
        $this->useVoicePortalWizard = $useVoicePortalWizard;
        return $this;
    }

    /**
     * Getter for becomeDefaultSystemVoicePortal
     *
     * @ElementName becomeDefaultSystemVoicePortal
     * @return bool|null
     */
    public function getBecomeDefaultSystemVoicePortal()
    {
        return $this->becomeDefaultSystemVoicePortal;
    }

    /**
     * Setter for becomeDefaultSystemVoicePortal
     *
     * @ElementName becomeDefaultSystemVoicePortal
     * @param bool|null $becomeDefaultSystemVoicePortal
     * @return $this
     */
    public function setBecomeDefaultSystemVoicePortal($becomeDefaultSystemVoicePortal)
    {
        $this->becomeDefaultSystemVoicePortal = $becomeDefaultSystemVoicePortal;
        return $this;
    }

    /**
     * Getter for useVoicePortalDefaultGreeting
     *
     * @ElementName useVoicePortalDefaultGreeting
     * @return bool|null
     */
    public function getUseVoicePortalDefaultGreeting()
    {
        return $this->useVoicePortalDefaultGreeting;
    }

    /**
     * Setter for useVoicePortalDefaultGreeting
     *
     * @ElementName useVoicePortalDefaultGreeting
     * @param bool|null $useVoicePortalDefaultGreeting
     * @return $this
     */
    public function setUseVoicePortalDefaultGreeting($useVoicePortalDefaultGreeting)
    {
        $this->useVoicePortalDefaultGreeting = $useVoicePortalDefaultGreeting;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFile
     *
     * @ElementName voicePortalGreetingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @ElementName voicePortalGreetingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile($voicePortalGreetingFile)
    {
        $this->voicePortalGreetingFile = $voicePortalGreetingFile;
        return $this;
    }

    /**
     * Getter for useVoiceMessagingDefaultGreeting
     *
     * @ElementName useVoiceMessagingDefaultGreeting
     * @return bool|null
     */
    public function getUseVoiceMessagingDefaultGreeting()
    {
        return $this->useVoiceMessagingDefaultGreeting;
    }

    /**
     * Setter for useVoiceMessagingDefaultGreeting
     *
     * @ElementName useVoiceMessagingDefaultGreeting
     * @param bool|null $useVoiceMessagingDefaultGreeting
     * @return $this
     */
    public function setUseVoiceMessagingDefaultGreeting($useVoiceMessagingDefaultGreeting)
    {
        $this->useVoiceMessagingDefaultGreeting = $useVoiceMessagingDefaultGreeting;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFile
     *
     * @ElementName voiceMessagingGreetingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @ElementName voiceMessagingGreetingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile($voiceMessagingGreetingFile)
    {
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        return $this;
    }

    /**
     * Getter for expressMode
     *
     * @ElementName expressMode
     * @return bool|null
     */
    public function getExpressMode()
    {
        return $this->expressMode;
    }

    /**
     * Setter for expressMode
     *
     * @ElementName expressMode
     * @param bool|null $expressMode
     * @return $this
     */
    public function setExpressMode($expressMode)
    {
        $this->expressMode = $expressMode;
        return $this;
    }


}

