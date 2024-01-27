<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhysicalLocationGetResponse
 *
 * Response to UserPhysicalLocationGetRequest.
 *
 * @see UserPhysicalLocationGetRequest
 * @Groups [{"id":"8250786d50d10f8fe081d126ecca3847:104","type":"sequence"}]
 */
class UserPhysicalLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 8250786d50d10f8fe081d126ecca3847:104
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

