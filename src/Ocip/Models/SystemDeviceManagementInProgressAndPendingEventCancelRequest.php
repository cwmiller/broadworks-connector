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
 */
class SystemDeviceManagementInProgressAndPendingEventCancelRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName cancelAllEvents
     * @var string|null
     */
    private $cancelAllEvents = null;

    /**
     * @ElementName cancelMultipleEvents
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents|null
     */
    private $cancelMultipleEvents = null;

    /**
     * @ElementName eventId
     * @var int[]
     */
    private $eventId = array(
        
    );

    /**
     * Getter for cancelAllEvents
     *
     * @ElementName cancelAllEvents
     * @return string|null
     */
    public function getCancelAllEvents()
    {
        return $this->cancelAllEvents;
    }

    /**
     * Setter for cancelAllEvents
     *
     * @ElementName cancelAllEvents
     * @param string|null $cancelAllEvents
     * @return $this
     */
    public function setCancelAllEvents($cancelAllEvents)
    {
        $this->cancelAllEvents = $cancelAllEvents;
        return $this;
    }

    /**
     * Getter for cancelMultipleEvents
     *
     * @ElementName cancelMultipleEvents
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents|null
     */
    public function getCancelMultipleEvents()
    {
        return $this->cancelMultipleEvents;
    }

    /**
     * Setter for cancelMultipleEvents
     *
     * @ElementName cancelMultipleEvents
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents|null $cancelMultipleEvents
     * @return $this
     */
    public function setCancelMultipleEvents(\CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents $cancelMultipleEvents)
    {
        $this->cancelMultipleEvents = $cancelMultipleEvents;
        return $this;
    }

    /**
     * Getter for eventId
     *
     * @ElementName eventId
     * @return int[]
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Setter for eventId
     *
     * @ElementName eventId
     * @param int[] $eventId
     * @return $this
     */
    public function setEventId(array $eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * Adder for eventId
     *
     * @ElementName eventId
     * @param int $eventId
     * @return $this
     */
    public function addEventId(int $eventId)
    {
        $this->eventId []= $eventId;
        return $this;
    }


}

