<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringGetResponse
 *
 * Response to UserCommunicationBarringGetRequest.
 *         This command only applies to users in an Enterprise.
 *
 * @see UserCommunicationBarringGetRequest
 */
class UserCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupSetting
     * @var bool|null
     */
    private $useGroupSetting = null;

    /**
     * @ElementName profileName
     * @var string|null
     */
    private $profileName = null;

    /**
     * Getter for useGroupSetting
     *
     * @ElementName useGroupSetting
     * @return bool|null
     */
    public function getUseGroupSetting()
    {
        return $this->useGroupSetting;
    }

    /**
     * Setter for useGroupSetting
     *
     * @ElementName useGroupSetting
     * @param bool|null $useGroupSetting
     * @return $this
     */
    public function setUseGroupSetting($useGroupSetting)
    {
        $this->useGroupSetting = $useGroupSetting;
        return $this;
    }

    /**
     * Getter for profileName
     *
     * @ElementName profileName
     * @return string|null
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @ElementName profileName
     * @param string|null $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }


}

