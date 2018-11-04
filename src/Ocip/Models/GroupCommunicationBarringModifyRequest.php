<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringModifyRequest
 *
 * Gets Communication Barring setting for a group.  
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useDefaultServiceProviderProfile
     * @var bool|null
     */
    private $useDefaultServiceProviderProfile = null;

    /**
     * @ElementName profile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $profile = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useDefaultServiceProviderProfile
     *
     * @ElementName useDefaultServiceProviderProfile
     * @return bool|null
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return $this->useDefaultServiceProviderProfile;
    }

    /**
     * Setter for useDefaultServiceProviderProfile
     *
     * @ElementName useDefaultServiceProviderProfile
     * @param bool|null $useDefaultServiceProviderProfile
     * @return $this
     */
    public function setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile)
    {
        $this->useDefaultServiceProviderProfile = $useDefaultServiceProviderProfile;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

