<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkProgressionGetResponse
 *
 * Response to SystemNetworkProgressionGetRequest.
 *
 * @see SystemNetworkProgressionGetRequest
 */
class SystemNetworkProgressionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName waitPeriodSeconds
     * @Type int
     * @var int|null
     */
    private $waitPeriodSeconds = null;

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
     * Getter for waitPeriodSeconds
     *
     * @return int
     */
    public function getWaitPeriodSeconds()
    {
        return $this->waitPeriodSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->waitPeriodSeconds;
    }

    /**
     * Setter for waitPeriodSeconds
     *
     * @param int $waitPeriodSeconds
     * @return $this
     */
    public function setWaitPeriodSeconds($waitPeriodSeconds)
    {
        $this->waitPeriodSeconds = $waitPeriodSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWaitPeriodSeconds()
    {
        $this->waitPeriodSeconds = null;
        return $this;
    }


}

