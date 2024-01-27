<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomParametersGetResponse
 *
 * Response to UserCollaborateInstantRoomParametersGetRequest.
 *
 * @see UserCollaborateInstantRoomParametersGetRequest
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:718","type":"sequence"}]
 */
class UserCollaborateInstantRoomParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName attendeeNotification
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification
     * @Group bc805893b9cc7e3e01eec64e9ad62768:718
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification|null
     */
    protected $attendeeNotification = null;

    /**
     * @ElementName endCollaborateRoomSessionOnOwnerExit
     * @Type bool
     * @Group bc805893b9cc7e3e01eec64e9ad62768:718
     * @var bool|null
     */
    protected $endCollaborateRoomSessionOnOwnerExit = null;

    /**
     * @ElementName ownerRequired
     * @Type bool
     * @Group bc805893b9cc7e3e01eec64e9ad62768:718
     * @var bool|null
     */
    protected $ownerRequired = null;

    /**
     * Getter for attendeeNotification
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification $attendeeNotification)
    {
        $this->attendeeNotification = $attendeeNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttendeeNotification()
    {
        $this->attendeeNotification = null;
        return $this;
    }

    /**
     * Getter for endCollaborateRoomSessionOnOwnerExit
     *
     * @return bool
     */
    public function getEndCollaborateRoomSessionOnOwnerExit()
    {
        return $this->endCollaborateRoomSessionOnOwnerExit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endCollaborateRoomSessionOnOwnerExit;
    }

    /**
     * Setter for endCollaborateRoomSessionOnOwnerExit
     *
     * @param bool $endCollaborateRoomSessionOnOwnerExit
     * @return $this
     */
    public function setEndCollaborateRoomSessionOnOwnerExit($endCollaborateRoomSessionOnOwnerExit)
    {
        $this->endCollaborateRoomSessionOnOwnerExit = $endCollaborateRoomSessionOnOwnerExit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndCollaborateRoomSessionOnOwnerExit()
    {
        $this->endCollaborateRoomSessionOnOwnerExit = null;
        return $this;
    }

    /**
     * Getter for ownerRequired
     *
     * @return bool
     */
    public function getOwnerRequired()
    {
        return $this->ownerRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ownerRequired;
    }

    /**
     * Setter for ownerRequired
     *
     * @param bool $ownerRequired
     * @return $this
     */
    public function setOwnerRequired($ownerRequired)
    {
        $this->ownerRequired = $ownerRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOwnerRequired()
    {
        $this->ownerRequired = null;
        return $this;
    }
}

