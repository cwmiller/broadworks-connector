<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereModifyInstanceRequest
 *
 * Request to modify a BroadWorks Anywhere instance.
 *         The following elements are only used in AS data mode:
 *           networkClassOfService            
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:196","type":"sequence"}]
 */
class GroupBroadWorksAnywhereModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName broadWorksAnywhereScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope|null
     */
    protected $broadWorksAnywhereScope = null;

    /**
     * @ElementName promptForCLID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt|null
     */
    protected $promptForCLID = null;

    /**
     * @ElementName silentPromptMode
     * @Type bool
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @var bool|null
     */
    protected $silentPromptMode = null;

    /**
     * @ElementName promptForPasscode
     * @Type bool
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @var bool|null
     */
    protected $promptForPasscode = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:196
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
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

