<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDoNotDisturbGetResponse
 *
 * Response to UserDoNotDisturbGetRequest.
 *
 * @see UserDoNotDisturbGetRequest
 * @Groups [{"id":"f424ffe4eea042849235863d758363ec:57","type":"sequence"}]
 */
class UserDoNotDisturbGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group f424ffe4eea042849235863d758363ec:57
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName ringSplash
     * @Type bool
     * @Group f424ffe4eea042849235863d758363ec:57
     * @var bool|null
     */
    protected $ringSplash = null;

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
     * Getter for ringSplash
     *
     * @return bool
     */
    public function getRingSplash()
    {
        return $this->ringSplash instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringSplash;
    }

    /**
     * Setter for ringSplash
     *
     * @param bool $ringSplash
     * @return $this
     */
    public function setRingSplash($ringSplash)
    {
        $this->ringSplash = $ringSplash;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingSplash()
    {
        $this->ringSplash = null;
        return $this;
    }
}

