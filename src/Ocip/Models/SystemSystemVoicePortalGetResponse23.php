<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetResponse23
 *
 * Response to SystemSystemVoicePortalGetRequest23.
 *
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *             networkClassOfService
 *
 * @see SystemSystemVoicePortalGetRequest23
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18427","type":"sequence"}]
 */
class SystemSystemVoicePortalGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callingLineIdName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName publicUserIdentity
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $publicUserIdentity = null;

    /**
     * @ElementName networkVoicePortalNumber
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $networkVoicePortalNumber = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var bool|null
     */
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var bool|null
     */
    protected $useVoicePortalWizard = null;

    /**
     * @ElementName isDefault
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var bool|null
     */
    protected $isDefault = null;

    /**
     * @ElementName useVoicePortalDefaultGreeting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var bool|null
     */
    protected $useVoicePortalDefaultGreeting = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $voicePortalGreetingMediaFileType = null;

    /**
     * @ElementName useVoiceMessagingDefaultGreeting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var bool|null
     */
    protected $useVoiceMessagingDefaultGreeting = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $voiceMessagingGreetingMediaFileType = null;

    /**
     * @ElementName expressMode
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @var bool|null
     */
    protected $expressMode = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18427
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

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
     * Getter for isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isDefault;
    }

    /**
     * Setter for isDefault
     *
     * @param bool $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsDefault()
    {
        $this->isDefault = null;
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
     * Getter for voicePortalGreetingFileDescription
     *
     * @return string
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return $this->voicePortalGreetingFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFileDescription;
    }

    /**
     * Setter for voicePortalGreetingFileDescription
     *
     * @param string $voicePortalGreetingFileDescription
     * @return $this
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription)
    {
        $this->voicePortalGreetingFileDescription = $voicePortalGreetingFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingFileDescription()
    {
        $this->voicePortalGreetingFileDescription = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingMediaFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return $this->voicePortalGreetingMediaFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingMediaFileType;
    }

    /**
     * Setter for voicePortalGreetingMediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaFileType
     * @return $this
     */
    public function setVoicePortalGreetingMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaFileType)
    {
        $this->voicePortalGreetingMediaFileType = $voicePortalGreetingMediaFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingMediaFileType()
    {
        $this->voicePortalGreetingMediaFileType = null;
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
     * Getter for voiceMessagingGreetingFileDescription
     *
     * @return string
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return $this->voiceMessagingGreetingFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFileDescription;
    }

    /**
     * Setter for voiceMessagingGreetingFileDescription
     *
     * @param string $voiceMessagingGreetingFileDescription
     * @return $this
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription)
    {
        $this->voiceMessagingGreetingFileDescription = $voiceMessagingGreetingFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingFileDescription()
    {
        $this->voiceMessagingGreetingFileDescription = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingMediaFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return $this->voiceMessagingGreetingMediaFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingMediaFileType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaFileType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaFileType)
    {
        $this->voiceMessagingGreetingMediaFileType = $voiceMessagingGreetingMediaFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingMediaFileType()
    {
        $this->voiceMessagingGreetingMediaFileType = null;
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

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }


}

