<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInternalCallingLineIDDeliveryGetResponse
 *
 * Response to UserInternalCallingLineIDDeliveryGetRequest.
 *
 * @see UserInternalCallingLineIDDeliveryGetRequest
 * @Groups [{"id":"7230ce25187ba26cc29fe67d7389f945:59","type":"sequence"}]
 */
class UserInternalCallingLineIDDeliveryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 7230ce25187ba26cc29fe67d7389f945:59
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

