<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringModifyRequest
 *
 * Modify the Communication Barring settings for a user. If useDefaultServiceProviderProfile is set to false, a profile name must be present. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         This command only applies to groups in an Enterprise. This command will fail for groups in a Service Provider.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1135","type":"sequence"}]
 */
class UserCommunicationBarringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1135
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName useGroupSetting
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1135
     * @var bool|null
     */
    private $useGroupSetting = null;

    /**
     * @ElementName profileName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1135
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $profileName = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for useGroupSetting
     *
     * @return bool
     */
    public function getUseGroupSetting()
    {
        return $this->useGroupSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupSetting;
    }

    /**
     * Setter for useGroupSetting
     *
     * @param bool $useGroupSetting
     * @return $this
     */
    public function setUseGroupSetting($useGroupSetting)
    {
        $this->useGroupSetting = $useGroupSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupSetting()
    {
        $this->useGroupSetting = null;
        return $this;
    }

    /**
     * Getter for profileName
     *
     * @return string|null
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string|null $profileName
     * @return $this
     */
    public function setProfileName($profileName = null)
    {
        if ($profileName === null) {
            $this->profileName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->profileName = $profileName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileName()
    {
        $this->profileName = null;
        return $this;
    }


}

