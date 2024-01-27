<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConnectedLineIdentificationRestrictionGetResponse
 *
 * Response to UserConnectedLineIdentificationRestrictionGetRequest.
 *
 * @see UserConnectedLineIdentificationRestrictionGetRequest
 * @Groups [{"id":"15715f03be92ddd5a3ab5c074ab1b025:59","type":"sequence"}]
 */
class UserConnectedLineIdentificationRestrictionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 15715f03be92ddd5a3ab5c074ab1b025:59
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

