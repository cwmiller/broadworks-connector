<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkProgressionGetResponse
 *
 * Response to SystemNetworkProgressionGetRequest.
 *
 * @see SystemNetworkProgressionGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:10965","type":"sequence"}]
 */
class SystemNetworkProgressionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:10965
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName waitPeriodSeconds
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:10965
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

