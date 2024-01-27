<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDDeliveryBlockingGetResponse
 *
 * Response to UserCallingLineIDDeliveryBlockingGetRequest.
 *
 * @see UserCallingLineIDDeliveryBlockingGetRequest
 * @Groups [{"id":"698b80d2572e018cbc4e8a5a85dc45ac:59","type":"sequence"}]
 */
class UserCallingLineIDDeliveryBlockingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 698b80d2572e018cbc4e8a5a85dc45ac:59
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

