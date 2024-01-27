<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceAutomaticCallbackInfo
 *
 * This is the configuration parameters for anonymous Call Rejection service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4233","type":"sequence"}]
 */
class ProfileAndServiceAutomaticCallbackInfo
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4233
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

