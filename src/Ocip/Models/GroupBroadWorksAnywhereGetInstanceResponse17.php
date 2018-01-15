<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceResponse17
 *
 * Response to GroupBroadWorksAnywhereGetInstanceRequest17.
 *         Contains the service profile information.
 *         
 *         Replaced by: GroupBroadWorksAnywhereGetInstanceResponse19sp1
 */
class GroupBroadWorksAnywhereGetInstanceResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName broadWorksAnywhereScope
     * @var string|null
     */
    private $broadWorksAnywhereScope = null;

    /**
     * @ElementName promptForCLID
     * @var string|null
     */
    private $promptForCLID = null;

    /**
     * @ElementName silentPromptMode
     * @var bool|null
     */
    private $silentPromptMode = null;

    /**
     * @ElementName promptForPasscode
     * @var bool|null
     */
    private $promptForPasscode = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for broadWorksAnywhereScope
     *
     * @ElementName broadWorksAnywhereScope
     * @return string|null
     */
    public function getBroadWorksAnywhereScope()
    {
        return $this->broadWorksAnywhereScope;
    }

    /**
     * Setter for broadWorksAnywhereScope
     *
     * @ElementName broadWorksAnywhereScope
     * @param string|null $broadWorksAnywhereScope
     * @return $this
     */
    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope)
    {
        $this->broadWorksAnywhereScope = $broadWorksAnywhereScope;
        return $this;
    }

    /**
     * Getter for promptForCLID
     *
     * @ElementName promptForCLID
     * @return string|null
     */
    public function getPromptForCLID()
    {
        return $this->promptForCLID;
    }

    /**
     * Setter for promptForCLID
     *
     * @ElementName promptForCLID
     * @param string|null $promptForCLID
     * @return $this
     */
    public function setPromptForCLID($promptForCLID)
    {
        $this->promptForCLID = $promptForCLID;
        return $this;
    }

    /**
     * Getter for silentPromptMode
     *
     * @ElementName silentPromptMode
     * @return bool|null
     */
    public function getSilentPromptMode()
    {
        return $this->silentPromptMode;
    }

    /**
     * Setter for silentPromptMode
     *
     * @ElementName silentPromptMode
     * @param bool|null $silentPromptMode
     * @return $this
     */
    public function setSilentPromptMode($silentPromptMode)
    {
        $this->silentPromptMode = $silentPromptMode;
        return $this;
    }

    /**
     * Getter for promptForPasscode
     *
     * @ElementName promptForPasscode
     * @return bool|null
     */
    public function getPromptForPasscode()
    {
        return $this->promptForPasscode;
    }

    /**
     * Setter for promptForPasscode
     *
     * @ElementName promptForPasscode
     * @param bool|null $promptForPasscode
     * @return $this
     */
    public function setPromptForPasscode($promptForPasscode)
    {
        $this->promptForPasscode = $promptForPasscode;
        return $this;
    }


}

