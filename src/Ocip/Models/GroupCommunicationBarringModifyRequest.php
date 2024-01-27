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
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2778","type":"sequence"}]
 */
class GroupCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2778
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2778
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useDefaultServiceProviderProfile
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2778
     * @var bool|null
     */
    protected $useDefaultServiceProviderProfile = null;

    /**
     * @ElementName profile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2778
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $profile = null;

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
     * Getter for useDefaultServiceProviderProfile
     *
     * @return bool
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return $this->useDefaultServiceProviderProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDefaultServiceProviderProfile;
    }

    /**
     * Setter for useDefaultServiceProviderProfile
     *
     * @param bool $useDefaultServiceProviderProfile
     * @return $this
     */
    public function setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile)
    {
        $this->useDefaultServiceProviderProfile = $useDefaultServiceProviderProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDefaultServiceProviderProfile()
    {
        $this->useDefaultServiceProviderProfile = null;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param string|null $profile
     * @return $this
     */
    public function setProfile($profile = null)
    {
        if ($profile === null) {
            $this->profile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->profile = $profile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }
}

