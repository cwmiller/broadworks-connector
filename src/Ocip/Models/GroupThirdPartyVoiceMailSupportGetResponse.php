<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupThirdPartyVoiceMailSupportGetResponse
 *
 * Response to GroupThirdPartyVoiceMailSupportGetRequest.
 *
 * @see GroupThirdPartyVoiceMailSupportGetRequest
 */
class GroupThirdPartyVoiceMailSupportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName groupServer
     * @var string|null
     */
    private $groupServer = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for groupServer
     *
     * @ElementName groupServer
     * @return string|null
     */
    public function getGroupServer()
    {
        return $this->groupServer;
    }

    /**
     * Setter for groupServer
     *
     * @ElementName groupServer
     * @param string|null $groupServer
     * @return $this
     */
    public function setGroupServer($groupServer)
    {
        $this->groupServer = $groupServer;
        return $this;
    }


}

