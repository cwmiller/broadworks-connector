<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementInProgressAndPendingEventCancelRequest
 *
 * Cancel pending and in progress events.  A list of individual events can 
 *         be canceled.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDeviceManagementInProgressAndPendingEventCancelRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName eventId
     * @var int[]
     */
    private $eventId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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
    public function setEventId($eventId)
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
    public function addEventId($eventId)
    {
        $this->eventId []= $eventId;
        return $this;
    }


}

