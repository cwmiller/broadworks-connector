<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalModifyRequest
 *
 * Request to update a System  Voice portal instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *             networkClassOfService
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18466","type":"sequence"}]
 */
class SystemSystemVoicePortalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $systemVoicePortalId = null;

    /**
     * @ElementName newSystemVoicePortalId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $newSystemVoicePortalId = null;

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName publicUserIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName networkVoicePortalNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkVoicePortalNumber = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var bool|null
     */
    private $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var bool|null
     */
    private $useVoicePortalWizard = null;

    /**
     * @ElementName becomeDefaultSystemVoicePortal
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var bool|null
     */
    private $becomeDefaultSystemVoicePortal = null;

    /**
     * @ElementName useVoicePortalDefaultGreeting
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var bool|null
     */
    private $useVoicePortalDefaultGreeting = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName useVoiceMessagingDefaultGreeting
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var bool|null
     */
    private $useVoiceMessagingDefaultGreeting = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voiceMessagingGreetingFile = null;

    /**
     * @ElementName expressMode
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @var bool|null
     */
    private $expressMode = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18466
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

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
     * Getter for newSystemVoicePortalId
     *
     * @return string
     */
    public function getNewSystemVoicePortalId()
    {
        return $this->newSystemVoicePortalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newSystemVoicePortalId;
    }

    /**
     * Setter for newSystemVoicePortalId
     *
     * @param string $newSystemVoicePortalId
     * @return $this
     */
    public function setNewSystemVoicePortalId($newSystemVoicePortalId)
    {
        $this->newSystemVoicePortalId = $newSystemVoicePortalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewSystemVoicePortalId()
    {
        $this->newSystemVoicePortalId = null;
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
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if ($phoneNumber === null) {
            $this->phoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber = $phoneNumber;
        }
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
     * @return string|null
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @param string|null $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity($publicUserIdentity = null)
    {
        if ($publicUserIdentity === null) {
            $this->publicUserIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->publicUserIdentity = $publicUserIdentity;
        }
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
     * @return string|null
     */
    public function getNetworkVoicePortalNumber()
    {
        return $this->networkVoicePortalNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkVoicePortalNumber;
    }

    /**
     * Setter for networkVoicePortalNumber
     *
     * @param string|null $networkVoicePortalNumber
     * @return $this
     */
    public function setNetworkVoicePortalNumber($networkVoicePortalNumber = null)
    {
        if ($networkVoicePortalNumber === null) {
            $this->networkVoicePortalNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkVoicePortalNumber = $networkVoicePortalNumber;
        }
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
     * Getter for becomeDefaultSystemVoicePortal
     *
     * @return bool
     */
    public function getBecomeDefaultSystemVoicePortal()
    {
        return $this->becomeDefaultSystemVoicePortal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefaultSystemVoicePortal;
    }

    /**
     * Setter for becomeDefaultSystemVoicePortal
     *
     * @param bool $becomeDefaultSystemVoicePortal
     * @return $this
     */
    public function setBecomeDefaultSystemVoicePortal($becomeDefaultSystemVoicePortal)
    {
        $this->becomeDefaultSystemVoicePortal = $becomeDefaultSystemVoicePortal;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefaultSystemVoicePortal()
    {
        $this->becomeDefaultSystemVoicePortal = null;
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

