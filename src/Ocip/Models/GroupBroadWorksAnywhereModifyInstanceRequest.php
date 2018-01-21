<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereModifyInstanceRequest
 *
 * Request to modify a BroadWorks Anywhere instance.
 *         The following elements are only used in AS data mode:
 *           networkClassOfService            
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksAnywhereModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
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
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
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

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

