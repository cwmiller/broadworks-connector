<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldGetResponse
 *
 * Response to UserMusicOnHoldGetRequest.
 *
 * @see UserMusicOnHoldGetRequest
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:261","type":"sequence"}]
 */
class UserMusicOnHoldGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 3a0309eb8d406fefc891f554ef114669:261
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

