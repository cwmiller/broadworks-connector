<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkProgressionModifyRequest
 *
 * Modify the system level data associated with network progression.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11604","type":"sequence"}]
 */
class SystemNetworkProgressionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11604
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName waitPeriodSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11604
     * @MinInclusive 1
     * @MaxInclusive 15
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

