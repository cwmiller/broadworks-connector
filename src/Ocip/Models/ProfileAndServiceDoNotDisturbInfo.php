<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDoNotDisturbInfo
 *
 * This is the configuration parameters for Do Not Disturb service
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4421","type":"sequence"}]
 */
class ProfileAndServiceDoNotDisturbInfo
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4421
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName ringSplash
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4421
     * @var bool|null
     */
    private $ringSplash = null;

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

