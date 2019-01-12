<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalAddRequest21sp1
 *
 * Request to add a system voice portal instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 *         The following elements are only used in IMS mode:
 *         publicUserIdentity, ignored in standalone mode if provided.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16515","type":"sequence"}]
 */
class SystemSystemVoicePortalAddRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $systemVoicePortalId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName publicUserIdentity
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName networkVoicePortalNumber
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var string|null
     */
    private $networkVoicePortalNumber = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var bool|null
     */
    private $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var bool|null
     */
    private $useVoicePortalWizard = null;

    /**
     * @ElementName useVoicePortalDefaultGreeting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var bool|null
     */
    private $useVoicePortalDefaultGreeting = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName useVoiceMessagingDefaultGreeting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var bool|null
     */
    private $useVoiceMessagingDefaultGreeting = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voiceMessagingGreetingFile = null;

    /**
     * @ElementName expressMode
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16515
     * @var bool|null
     */
    private $expressMode = null;

    /**
     * Getter for systemVoicePortalId
     *
     * @return string
     */
    public function getSystemVoicePortalId()
    {
        return $this->systemVoicePortalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemVoicePortalId;
    }

    /**
     * Setter for systemVoicePortalId
     *
     * @param string $systemVoicePortalId
     * @return $this
     */
    public function setSystemVoicePortalId($systemVoicePortalId)
    {
        $this->systemVoicePortalId = $systemVoicePortalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemVoicePortalId()
    {
        $this->systemVoicePortalId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for publicUserIdentity
     *
     * @return string
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @param string $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity($publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicUserIdentity()
    {
        $this->publicUserIdentity = null;
        return $this;
    }

    /**
     * Getter for networkVoicePortalNumber
     *
     * @return string
     */
    public function getNetworkVoicePortalNumber()
    {
        return $this->networkVoicePortalNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkVoicePortalNumber;
    }

    /**
     * Setter for networkVoicePortalNumber
     *
     * @param string $networkVoicePortalNumber
     * @return $this
     */
    public function setNetworkVoicePortalNumber($networkVoicePortalNumber)
    {
        $this->networkVoicePortalNumber = $networkVoicePortalNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkVoicePortalNumber()
    {
        $this->networkVoicePortalNumber = null;
        return $this;
    }

    /**
     * Getter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @return bool
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    }

    /**
     * Setter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @param bool $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @return $this
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;
        return $this;
    }

    /**
     * Getter for useVoicePortalWizard
     *
     * @return bool
     */
    public function getUseVoicePortalWizard()
    {
        return $this->useVoicePortalWizard instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useVoicePortalWizard;
    }

    /**
     * Setter for useVoicePortalWizard
     *
     * @param bool $useVoicePortalWizard
     * @return $this
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard)
    {
        $this->useVoicePortalWizard = $useVoicePortalWizard;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseVoicePortalWizard()
    {
        $this->useVoicePortalWizard = null;
        return $this;
    }

    /**
     * Getter for useVoicePortalDefaultGreeting
     *
     * @return bool
     */
    public function getUseVoicePortalDefaultGreeting()
    {
        return $this->useVoicePortalDefaultGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useVoicePortalDefaultGreeting;
    }

    /**
     * Setter for useVoicePortalDefaultGreeting
     *
     * @param bool $useVoicePortalDefaultGreeting
     * @return $this
     */
    public function setUseVoicePortalDefaultGreeting($useVoicePortalDefaultGreeting)
    {
        $this->useVoicePortalDefaultGreeting = $useVoicePortalDefaultGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseVoicePortalDefaultGreeting()
    {
        $this->useVoicePortalDefaultGreeting = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voicePortalGreetingFile)
    {
        $this->voicePortalGreetingFile = $voicePortalGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingFile()
    {
        $this->voicePortalGreetingFile = null;
        return $this;
    }

    /**
     * Getter for useVoiceMessagingDefaultGreeting
     *
     * @return bool
     */
    public function getUseVoiceMessagingDefaultGreeting()
    {
        return $this->useVoiceMessagingDefaultGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useVoiceMessagingDefaultGreeting;
    }

    /**
     * Setter for useVoiceMessagingDefaultGreeting
     *
     * @param bool $useVoiceMessagingDefaultGreeting
     * @return $this
     */
    public function setUseVoiceMessagingDefaultGreeting($useVoiceMessagingDefaultGreeting)
    {
        $this->useVoiceMessagingDefaultGreeting = $useVoiceMessagingDefaultGreeting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseVoiceMessagingDefaultGreeting()
    {
        $this->useVoiceMessagingDefaultGreeting = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voiceMessagingGreetingFile)
    {
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingFile()
    {
        $this->voiceMessagingGreetingFile = null;
        return $this;
    }

    /**
     * Getter for expressMode
     *
     * @return bool
     */
    public function getExpressMode()
    {
        return $this->expressMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expressMode;
    }

    /**
     * Setter for expressMode
     *
     * @param bool $expressMode
     * @return $this
     */
    public function setExpressMode($expressMode)
    {
        $this->expressMode = $expressMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpressMode()
    {
        $this->expressMode = null;
        return $this;
    }


}

