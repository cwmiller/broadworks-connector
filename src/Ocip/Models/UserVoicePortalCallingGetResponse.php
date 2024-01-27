<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoicePortalCallingGetResponse
 *
 * Response to UserVoicePortalCallingGetRequest.
 *
 * @see UserVoicePortalCallingGetRequest
 * @Groups [{"id":"dd016d48d2e81488e57927ce5f8d0ac7:57","type":"sequence"}]
 */
class UserVoicePortalCallingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group dd016d48d2e81488e57927ce5f8d0ac7:57
     * @var bool|null
     */
    protected $isActive = null;

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
}

