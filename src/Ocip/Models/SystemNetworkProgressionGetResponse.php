<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkProgressionGetResponse
 *
 * Response to SystemNetworkProgressionGetRequest.
 */
class SystemNetworkProgressionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName waitPeriodSeconds
     * @var int|null
     */
    private $waitPeriodSeconds = null;

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
     * Getter for waitPeriodSeconds
     *
     * @ElementName waitPeriodSeconds
     * @return int|null
     */
    public function getWaitPeriodSeconds()
    {
        return $this->waitPeriodSeconds;
    }

    /**
     * Setter for waitPeriodSeconds
     *
     * @ElementName waitPeriodSeconds
     * @param int|null $waitPeriodSeconds
     * @return $this
     */
    public function setWaitPeriodSeconds($waitPeriodSeconds)
    {
        $this->waitPeriodSeconds = $waitPeriodSeconds;
        return $this;
    }


}

