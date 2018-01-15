<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringGetResponse
 *
 * Response to SystemCommunicationBarringGetRequest.
 */
class GroupCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useDefaultServiceProviderProfile
     * @var bool|null
     */
    private $useDefaultServiceProviderProfile = null;

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

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
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param string|null $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

