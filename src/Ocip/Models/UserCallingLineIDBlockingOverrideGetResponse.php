<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDBlockingOverrideGetResponse
 *
 * Response to UserCallingLineIDBlockingOverrideGetRequest.
 *
 * @see UserCallingLineIDBlockingOverrideGetRequest
 * @Groups [{"id":"f23c819d0aa2b40aeba3248b27fe2520:59","type":"sequence"}]
 */
class UserCallingLineIDBlockingOverrideGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group f23c819d0aa2b40aeba3248b27fe2520:59
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

