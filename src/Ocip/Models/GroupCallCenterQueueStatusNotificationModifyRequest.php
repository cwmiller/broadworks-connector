<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueStatusNotificationModifyRequest
 *
 * Set the status configuration for a given call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

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
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

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

