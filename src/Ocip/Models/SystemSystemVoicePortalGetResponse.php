<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetResponse
 *
 * Response to SystemSystemVoicePortalGetRequest.
 *             
 *             Replaced by: SystemSystemVoicePortalGetResponse21sp1.
 *
 * @see SystemSystemVoicePortalGetRequest
 * @see SystemSystemVoicePortalGetResponse21sp1
 */
class SystemSystemVoicePortalGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName publicUserIdentity
     * @var string|null
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName networkVoicePortalNumber
     * @var string|null
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
     * @ElementName isDefault
     * @var bool|null
     */
    private $isDefault = null;

    /**
     * @ElementName useVoicePortalDefaultGreeting
     * @var bool|null
     */
    private $useVoicePortalDefaultGreeting = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @var string|null
     */
    private $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaFileType
     * @var string|null
     */
    private $voicePortalGreetingMediaFileType = null;

    /**
     * @ElementName useVoiceMessagingDefaultGreeting
     * @var bool|null
     */
    private $useVoiceMessagingDefaultGreeting = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @var string|null
     */
    private $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaFileType
     * @var string|null
     */
    private $voiceMessagingGreetingMediaFileType = null;

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
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
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
     * @return string|null
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @param string|null $publicUserIdentity
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
     * @return string|null
     */
    public function getNetworkVoicePortalNumber()
    {
        return $this->networkVoicePortalNumber;
    }

    /**
     * Setter for networkVoicePortalNumber
     *
     * @ElementName networkVoicePortalNumber
     * @param string|null $networkVoicePortalNumber
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
     * Getter for isDefault
     *
     * @ElementName isDefault
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Setter for isDefault
     *
     * @ElementName isDefault
     * @param bool|null $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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
     * Getter for voicePortalGreetingFileDescription
     *
     * @ElementName voicePortalGreetingFileDescription
     * @return string|null
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return $this->voicePortalGreetingFileDescription;
    }

    /**
     * Setter for voicePortalGreetingFileDescription
     *
     * @ElementName voicePortalGreetingFileDescription
     * @param string|null $voicePortalGreetingFileDescription
     * @return $this
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription)
    {
        $this->voicePortalGreetingFileDescription = $voicePortalGreetingFileDescription;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingMediaFileType
     *
     * @ElementName voicePortalGreetingMediaFileType
     * @return string|null
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return $this->voicePortalGreetingMediaFileType;
    }

    /**
     * Setter for voicePortalGreetingMediaFileType
     *
     * @ElementName voicePortalGreetingMediaFileType
     * @param string|null $voicePortalGreetingMediaFileType
     * @return $this
     */
    public function setVoicePortalGreetingMediaFileType($voicePortalGreetingMediaFileType)
    {
        $this->voicePortalGreetingMediaFileType = $voicePortalGreetingMediaFileType;
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
     * Getter for voiceMessagingGreetingFileDescription
     *
     * @ElementName voiceMessagingGreetingFileDescription
     * @return string|null
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return $this->voiceMessagingGreetingFileDescription;
    }

    /**
     * Setter for voiceMessagingGreetingFileDescription
     *
     * @ElementName voiceMessagingGreetingFileDescription
     * @param string|null $voiceMessagingGreetingFileDescription
     * @return $this
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription)
    {
        $this->voiceMessagingGreetingFileDescription = $voiceMessagingGreetingFileDescription;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingMediaFileType
     *
     * @ElementName voiceMessagingGreetingMediaFileType
     * @return string|null
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return $this->voiceMessagingGreetingMediaFileType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaFileType
     *
     * @ElementName voiceMessagingGreetingMediaFileType
     * @param string|null $voiceMessagingGreetingMediaFileType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaFileType($voiceMessagingGreetingMediaFileType)
    {
        $this->voiceMessagingGreetingMediaFileType = $voiceMessagingGreetingMediaFileType;
        return $this;
    }


}

