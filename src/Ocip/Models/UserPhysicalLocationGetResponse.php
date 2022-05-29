<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhysicalLocationGetResponse
 *
 * Response to UserPhysicalLocationGetRequest.
 *
 * @see UserPhysicalLocationGetRequest
 * @Groups [{"id":"4a26e5fa0592a0fd3b4e60e9432f8588:104","type":"sequence"}]
 */
class UserPhysicalLocationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 4a26e5fa0592a0fd3b4e60e9432f8588:104
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

