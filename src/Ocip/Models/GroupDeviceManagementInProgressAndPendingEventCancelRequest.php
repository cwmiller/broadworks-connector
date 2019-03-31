<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementInProgressAndPendingEventCancelRequest
 *
 * Cancel pending and in progress events.  A list of individual events can 
 *         be canceled.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3367","type":"sequence"}]
 */
class GroupDeviceManagementInProgressAndPendingEventCancelRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3367
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3367
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName eventId
     * @Type int
     * @Array
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3367
     * @var int[]
     */
    private $eventId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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

