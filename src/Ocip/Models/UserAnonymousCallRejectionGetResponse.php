<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnonymousCallRejectionGetResponse
 *
 * Response to UserAnonymousCallRejectionGetRequest.
 *
 * @see UserAnonymousCallRejectionGetRequest
 * @Groups [{"id":"17d2110a0df023b843fdbd156e17bec8:110","type":"sequence"}]
 */
class UserAnonymousCallRejectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 17d2110a0df023b843fdbd156e17bec8:110
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

