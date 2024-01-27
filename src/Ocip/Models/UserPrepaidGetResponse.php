<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrepaidGetResponse
 *
 * Response to UserPrepaidGetRequest.
 *
 * @see UserPrepaidGetRequest
 * @Groups [{"id":"78a6b99d4a2498f0e1b41ca6979a5fd8:57","type":"sequence"}]
 */
class UserPrepaidGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 78a6b99d4a2498f0e1b41ca6979a5fd8:57
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

