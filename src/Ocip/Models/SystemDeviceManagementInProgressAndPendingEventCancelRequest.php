<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementInProgressAndPendingEventCancelRequest
 *
 * Cancel pending and in progress events.  Either all events, multiple
 *       events, or a list of specified events can be canceled.
 *       When specifying multiple events, an event must meet all specified
 *       criteria to be canceled.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7984","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:7985","type":"choice"}]}]
 */
class SystemDeviceManagementInProgressAndPendingEventCancelRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName cancelAllEvents
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:7985
     * @var string|null
     */
    protected $cancelAllEvents = null;

    /**
     * @ElementName cancelMultipleEvents
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents
     * @Group da582a1f8028404e70d260cf1f891033:7985
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents|null
     */
    protected $cancelMultipleEvents = null;

    /**
     * @ElementName eventId
     * @Type int
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:7985
     * @var int[]
     */
    protected $eventId = [
        
    ];

    /**
     * Getter for cancelAllEvents
     *
     * @return string
     */
    public function getCancelAllEvents()
    {
        return $this->cancelAllEvents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelAllEvents;
    }

    /**
     * Setter for cancelAllEvents
     *
     * @param string $cancelAllEvents
     * @return $this
     */
    public function setCancelAllEvents($cancelAllEvents)
    {
        $this->cancelAllEvents = $cancelAllEvents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelAllEvents()
    {
        $this->cancelAllEvents = null;
        return $this;
    }

    /**
     * Getter for cancelMultipleEvents
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents
     */
    public function getCancelMultipleEvents()
    {
        return $this->cancelMultipleEvents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelMultipleEvents;
    }

    /**
     * Setter for cancelMultipleEvents
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents $cancelMultipleEvents
     * @return $this
     */
    public function setCancelMultipleEvents(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents $cancelMultipleEvents)
    {
        $this->cancelMultipleEvents = $cancelMultipleEvents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelMultipleEvents()
    {
        $this->cancelMultipleEvents = null;
        return $this;
    }

    /**
     * Getter for eventId
     *
     * @return int[]
     */
    public function getEventId()
    {
        return $this->eventId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventId;
    }

    /**
     * Setter for eventId
     *
     * @param int[] $eventId
     * @return $this
     */
    public function setEventId(array $eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventId()
    {
        $this->eventId = null;
        return $this;
    }

    /**
     * Adder for eventId
     *
     * @param int $eventId
     * @return $this
     */
    public function addEventId(int $eventId)
    {
        $this->eventId[] = $eventId;
        return $this;
    }
}

