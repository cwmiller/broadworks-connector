<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSilentAlertingGetResponse
 *
 * Response to UserSilentAlertingGetRequest.
 *
 * @see UserSilentAlertingGetRequest
 * @Groups [{"id":"6a0b48bb5563c1c69d62271066fdc8cb:57","type":"sequence"}]
 */
class UserSilentAlertingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 6a0b48bb5563c1c69d62271066fdc8cb:57
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

