<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringGetResponse
 *
 * Response to UserCommunicationBarringGetRequest.
 *         This command only applies to users in an Enterprise.
 *
 * @see UserCommunicationBarringGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1236","type":"sequence"}]
 */
class UserCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupSetting
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1236
     * @var bool|null
     */
    private $useGroupSetting = null;

    /**
     * @ElementName profileName
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1236
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $profileName = null;

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

