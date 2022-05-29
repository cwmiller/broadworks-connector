<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueStatusNotificationGetResponse
 *
 * Response to the GroupCallCenterQueueStatusNotificationGetRequest.
 *         The response contains the call center status configuration information.
 *
 * @see GroupCallCenterQueueStatusNotificationGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5681","type":"sequence"}]
 */
class GroupCallCenterQueueStatusNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableQueueStatusNotification
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5681
     * @var bool|null
     */
    protected $enableQueueStatusNotification = null;

    /**
     * @ElementName enableQueueDepthThreshold
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5681
     * @var bool|null
     */
    protected $enableQueueDepthThreshold = null;

    /**
     * @ElementName enableWaitingTimeThreshold
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5681
     * @var bool|null
     */
    protected $enableWaitingTimeThreshold = null;

    /**
     * @ElementName numberOfCallsThreshold
     * @Type int
     * @Group e2c537e3e39483b96620673a7012ffdd:5681
     * @MinInclusive 1
     * @MaxInclusive 525
     * @var int|null
     */
    protected $numberOfCallsThreshold = null;

    /**
     * @ElementName waitingTimeOfCallsThreshold
     * @Type int
     * @Group e2c537e3e39483b96620673a7012ffdd:5681
     * @MinInclusive 1
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $waitingTimeOfCallsThreshold = null;

    /**
     * Getter for enableQueueStatusNotification
     *
     * @return bool
     */
    public function getEnableQueueStatusNotification()
    {
        return $this->enableQueueStatusNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableQueueStatusNotification;
    }

    /**
     * Setter for enableQueueStatusNotification
     *
     * @param bool $enableQueueStatusNotification
     * @return $this
     */
    public function setEnableQueueStatusNotification($enableQueueStatusNotification)
    {
        $this->enableQueueStatusNotification = $enableQueueStatusNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableQueueStatusNotification()
    {
        $this->enableQueueStatusNotification = null;
        return $this;
    }

    /**
     * Getter for enableQueueDepthThreshold
     *
     * @return bool
     */
    public function getEnableQueueDepthThreshold()
    {
        return $this->enableQueueDepthThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableQueueDepthThreshold;
    }

    /**
     * Setter for enableQueueDepthThreshold
     *
     * @param bool $enableQueueDepthThreshold
     * @return $this
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold)
    {
        $this->enableQueueDepthThreshold = $enableQueueDepthThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableQueueDepthThreshold()
    {
        $this->enableQueueDepthThreshold = null;
        return $this;
    }

    /**
     * Getter for enableWaitingTimeThreshold
     *
     * @return bool
     */
    public function getEnableWaitingTimeThreshold()
    {
        return $this->enableWaitingTimeThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableWaitingTimeThreshold;
    }

    /**
     * Setter for enableWaitingTimeThreshold
     *
     * @param bool $enableWaitingTimeThreshold
     * @return $this
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold)
    {
        $this->enableWaitingTimeThreshold = $enableWaitingTimeThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableWaitingTimeThreshold()
    {
        $this->enableWaitingTimeThreshold = null;
        return $this;
    }

    /**
     * Getter for numberOfCallsThreshold
     *
     * @return int
     */
    public function getNumberOfCallsThreshold()
    {
        return $this->numberOfCallsThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsThreshold;
    }

    /**
     * Setter for numberOfCallsThreshold
     *
     * @param int $numberOfCallsThreshold
     * @return $this
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold)
    {
        $this->numberOfCallsThreshold = $numberOfCallsThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsThreshold()
    {
        $this->numberOfCallsThreshold = null;
        return $this;
    }

    /**
     * Getter for waitingTimeOfCallsThreshold
     *
     * @return int
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return $this->waitingTimeOfCallsThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->waitingTimeOfCallsThreshold;
    }

    /**
     * Setter for waitingTimeOfCallsThreshold
     *
     * @param int $waitingTimeOfCallsThreshold
     * @return $this
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold)
    {
        $this->waitingTimeOfCallsThreshold = $waitingTimeOfCallsThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWaitingTimeOfCallsThreshold()
    {
        $this->waitingTimeOfCallsThreshold = null;
        return $this;
    }


}

