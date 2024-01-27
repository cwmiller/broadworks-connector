<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCallingLineIDDeliveryGetResponse
 *
 * Response to UserExternalCallingLineIDDeliveryGetRequest.
 *
 * @see UserExternalCallingLineIDDeliveryGetRequest
 * @Groups [{"id":"dcd29eef986f335219d138f47d461233:59","type":"sequence"}]
 */
class UserExternalCallingLineIDDeliveryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group dcd29eef986f335219d138f47d461233:59
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

