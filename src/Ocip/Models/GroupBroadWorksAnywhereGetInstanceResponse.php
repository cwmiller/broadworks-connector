<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceResponse
 *
 * Response to GroupBroadWorksAnywhereGetInstanceRequest.
 *         Contains the service profile information.
 *
 * @see GroupBroadWorksAnywhereGetInstanceRequest
 */
class GroupBroadWorksAnywhereGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName broadWorksAnywhereScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereScope|null
     */
    private $broadWorksAnywhereScope = null;

    /**
     * @ElementName promptForCLID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksAnywhereCLIDPrompt|null
     */
    private $promptForCLID = null;

    /**
     * @ElementName silentPromptMode
     * @Type bool
     * @var bool|null
     */
    private $silentPromptMode = null;

    /**
     * @ElementName promptForPasscode
     * @Type bool
     * @var bool|null
     */
    private $promptForPasscode = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile)
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


}

