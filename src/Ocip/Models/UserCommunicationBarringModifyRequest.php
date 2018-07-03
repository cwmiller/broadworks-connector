<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringModifyRequest
 *
 * Modify the Communication Barring settings for a user. If
 * useDefaultServiceProviderProfile is set to false, a profile name must be
 * present. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         This command only applies to groups in an Enterprise. This command will
 * fail for groups in a Service Provider.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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

