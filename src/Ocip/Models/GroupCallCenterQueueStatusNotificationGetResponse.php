<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueStatusNotificationGetResponse
 *
 * Response to the GroupCallCenterQueueStatusNotificationGetRequest.
 *         The response contains the call center status configuration information.
 */
class GroupCallCenterQueueStatusNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableQueueStatusNotification
     * @var bool|null
     */
    private $enableQueueStatusNotification = null;

    /**
     * @ElementName enableQueueDepthThreshold
     * @var bool|null
     */
    private $enableQueueDepthThreshold = null;

    /**
     * @ElementName enableWaitingTimeThreshold
     * @var bool|null
     */
    private $enableWaitingTimeThreshold = null;

    /**
     * @ElementName numberOfCallsThreshold
     * @var int|null
     */
    private $numberOfCallsThreshold = null;

    /**
     * @ElementName waitingTimeOfCallsThreshold
     * @var int|null
     */
    private $waitingTimeOfCallsThreshold = null;

    /**
     * Getter for enableQueueStatusNotification
     *
     * @ElementName enableQueueStatusNotification
     * @return bool|null
     */
    public function getEnableQueueStatusNotification()
    {
        return $this->enableQueueStatusNotification;
    }

    /**
     * Setter for enableQueueStatusNotification
     *
     * @ElementName enableQueueStatusNotification
     * @param bool|null $enableQueueStatusNotification
     * @return $this
     */
    public function setEnableQueueStatusNotification($enableQueueStatusNotification)
    {
        $this->enableQueueStatusNotification = $enableQueueStatusNotification;
        return $this;
    }

    /**
     * Getter for enableQueueDepthThreshold
     *
     * @ElementName enableQueueDepthThreshold
     * @return bool|null
     */
    public function getEnableQueueDepthThreshold()
    {
        return $this->enableQueueDepthThreshold;
    }

    /**
     * Setter for enableQueueDepthThreshold
     *
     * @ElementName enableQueueDepthThreshold
     * @param bool|null $enableQueueDepthThreshold
     * @return $this
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold)
    {
        $this->enableQueueDepthThreshold = $enableQueueDepthThreshold;
        return $this;
    }

    /**
     * Getter for enableWaitingTimeThreshold
     *
     * @ElementName enableWaitingTimeThreshold
     * @return bool|null
     */
    public function getEnableWaitingTimeThreshold()
    {
        return $this->enableWaitingTimeThreshold;
    }

    /**
     * Setter for enableWaitingTimeThreshold
     *
     * @ElementName enableWaitingTimeThreshold
     * @param bool|null $enableWaitingTimeThreshold
     * @return $this
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold)
    {
        $this->enableWaitingTimeThreshold = $enableWaitingTimeThreshold;
        return $this;
    }

    /**
     * Getter for numberOfCallsThreshold
     *
     * @ElementName numberOfCallsThreshold
     * @return int|null
     */
    public function getNumberOfCallsThreshold()
    {
        return $this->numberOfCallsThreshold;
    }

    /**
     * Setter for numberOfCallsThreshold
     *
     * @ElementName numberOfCallsThreshold
     * @param int|null $numberOfCallsThreshold
     * @return $this
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold)
    {
        $this->numberOfCallsThreshold = $numberOfCallsThreshold;
        return $this;
    }

    /**
     * Getter for waitingTimeOfCallsThreshold
     *
     * @ElementName waitingTimeOfCallsThreshold
     * @return int|null
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return $this->waitingTimeOfCallsThreshold;
    }

    /**
     * Setter for waitingTimeOfCallsThreshold
     *
     * @ElementName waitingTimeOfCallsThreshold
     * @param int|null $waitingTimeOfCallsThreshold
     * @return $this
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold)
    {
        $this->waitingTimeOfCallsThreshold = $waitingTimeOfCallsThreshold;
        return $this;
    }


}

