<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDoNotDisturbInfo
 *
 * This is the configuration parameters for Do Not Disturb service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4430","type":"sequence"}]
 */
class ProfileAndServiceDoNotDisturbInfo
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4430
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName ringSplash
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4430
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

