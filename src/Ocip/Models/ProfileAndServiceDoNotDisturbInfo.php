<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDoNotDisturbInfo
 *
 * This is the configuration parameters for Do Not Disturb service
 */
class ProfileAndServiceDoNotDisturbInfo
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName ringSplash
     * @var bool|null
     */
    private $ringSplash = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for ringSplash
     *
     * @ElementName ringSplash
     * @return bool|null
     */
    public function getRingSplash()
    {
        return $this->ringSplash;
    }

    /**
     * Setter for ringSplash
     *
     * @ElementName ringSplash
     * @param bool|null $ringSplash
     * @return $this
     */
    public function setRingSplash($ringSplash)
    {
        $this->ringSplash = $ringSplash;
        return $this;
    }


}

