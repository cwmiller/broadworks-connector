<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringGetResponse
 *
 * Response to UserCommunicationBarringGetRequest.
 *         This command only applies to users in an Enterprise.
 *
 * @see UserCommunicationBarringGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1232","type":"sequence"}]
 */
class UserCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useGroupSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1232
     * @var bool|null
     */
    protected $useGroupSetting = null;

    /**
     * @ElementName profileName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1232
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $profileName = null;

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
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
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

