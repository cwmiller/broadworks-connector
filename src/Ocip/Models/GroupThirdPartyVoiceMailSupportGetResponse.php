<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupThirdPartyVoiceMailSupportGetResponse
 *
 * Response to GroupThirdPartyVoiceMailSupportGetRequest.
 *
 * @see GroupThirdPartyVoiceMailSupportGetRequest
 * @Groups [{"id":"21e97b8199c6e7eff29a84874335b46e:69","type":"sequence"}]
 */
class GroupThirdPartyVoiceMailSupportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 21e97b8199c6e7eff29a84874335b46e:69
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName groupServer
     * @Type string
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:69
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $groupServer = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for groupServer
     *
     * @return string
     */
    public function getGroupServer()
    {
        return $this->groupServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServer;
    }

    /**
     * Setter for groupServer
     *
     * @param string $groupServer
     * @return $this
     */
    public function setGroupServer($groupServer)
    {
        $this->groupServer = $groupServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServer()
    {
        $this->groupServer = null;
        return $this;
    }
}

