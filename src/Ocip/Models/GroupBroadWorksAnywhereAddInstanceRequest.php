<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereAddInstanceRequest
 *
 * Add a BroadWorks Anywhere instance to a group.
 *         The domain is required in the serviceUserId.
 *         The following elements are only used in AS data mode:
 *           networkClassOfService        
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:65","type":"sequence"}]
 */
class GroupBroadWorksAnywhereAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName broadWorksAnywhereScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope|null
     */
    private $broadWorksAnywhereScope = null;

    /**
     * @ElementName promptForCLID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt|null
     */
    private $promptForCLID = null;

    /**
     * @ElementName silentPromptMode
     * @Type bool
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @var bool|null
     */
    private $silentPromptMode = null;

    /**
     * @ElementName promptForPasscode
     * @Type bool
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @var bool|null
     */
    private $promptForPasscode = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:65
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for broadWorksAnywhereScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope
     */
    public function getBroadWorksAnywhereScope()
    {
        return $this->broadWorksAnywhereScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->broadWorksAnywhereScope;
    }

    /**
     * Setter for broadWorksAnywhereScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope $broadWorksAnywhereScope
     * @return $this
     */
    public function setBroadWorksAnywhereScope(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope $broadWorksAnywhereScope)
    {
        $this->broadWorksAnywhereScope = $broadWorksAnywhereScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBroadWorksAnywhereScope()
    {
        $this->broadWorksAnywhereScope = null;
        return $this;
    }

    /**
     * Getter for promptForCLID
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt
     */
    public function getPromptForCLID()
    {
        return $this->promptForCLID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promptForCLID;
    }

    /**
     * Setter for promptForCLID
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt $promptForCLID
     * @return $this
     */
    public function setPromptForCLID(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt $promptForCLID)
    {
        $this->promptForCLID = $promptForCLID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromptForCLID()
    {
        $this->promptForCLID = null;
        return $this;
    }

    /**
     * Getter for silentPromptMode
     *
     * @return bool
     */
    public function getSilentPromptMode()
    {
        return $this->silentPromptMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->silentPromptMode;
    }

    /**
     * Setter for silentPromptMode
     *
     * @param bool $silentPromptMode
     * @return $this
     */
    public function setSilentPromptMode($silentPromptMode)
    {
        $this->silentPromptMode = $silentPromptMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSilentPromptMode()
    {
        $this->silentPromptMode = null;
        return $this;
    }

    /**
     * Getter for promptForPasscode
     *
     * @return bool
     */
    public function getPromptForPasscode()
    {
        return $this->promptForPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promptForPasscode;
    }

    /**
     * Setter for promptForPasscode
     *
     * @param bool $promptForPasscode
     * @return $this
     */
    public function setPromptForPasscode($promptForPasscode)
    {
        $this->promptForPasscode = $promptForPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromptForPasscode()
    {
        $this->promptForPasscode = null;
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

