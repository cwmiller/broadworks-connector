<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoicePortalCallingGetResponse
 *
 * Response to UserVoicePortalCallingGetRequest.
 *
 * @see UserVoicePortalCallingGetRequest
 * @Groups [{"id":"23caf3c7f8f181bcb5b4719a3564ba94:57","type":"sequence"}]
 */
class UserVoicePortalCallingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 23caf3c7f8f181bcb5b4719a3564ba94:57
     * @var bool|null
     */
    private $isActive = null;

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

