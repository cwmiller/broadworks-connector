<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementEventGetListResponse22
 *
 * Response to SystemDeviceManagementEventGetListRequest22.
 *         Contains a table with column headings: "Event Id", "Status", "Action",
 *         "Level", "Type", "Additional Info", "Is Local", "Completion %",
 *         "Pushed/ Same Hash/ Not Pushed", "Login Id", "Start Time",
 *         "Process Time", "Rx Time", "Total Time", "Request", "Priority".
 *         "Event Id" is a unique identifer for the event.
 *         "Status" can be: Pending, Queued, In Progress,
 *         Process On Other Host, Stale, Completed, Canceled.
 *         "Action" can be: Delete, Download, Rebuild, Reset, Upload.
 *         "Level" can be: Device, Device Type, Device Type Group, Group, User.
 *         "Type" can be: Automatic, Manual.
 *         "Additional Info" includes the affected device type, device or group.
 *         It depends on the level of the event:
 *           Device Profile: "Device Name" "Service Provider Id" "Group Id"
 *           Device Type: "Device Type Name"
 *           Device Type Service Provider: "Service Provider Id" "Device Type Name"
 *           Service Provider: "Service Provider Id"
 *           Device Type Group: "Service Provider Id" "Group Id" "Device Type Name"
 *           Group: "Service Provider Id" "Group Id"
 *           User: "User Id"
 *         "Is Local" is set to "yes" if the event is processed on the server
 *         who received the request, "no" otherwise meaning that the event is
 *         processed on another server.
 *         "Completion %" provides an estimate of the completion of the event.
 *         A percentage is given, the current number of completed expanded event,
 *         and the total number of expanded event.
 *         "Pushed/ Same Hash/ Not Pushed" gives the total number of files that
 *         were pushed, not pushed because of same hash, and not pushed when
 *         processing the event.
 *         "LoginId" is the user or admin id who triggered the event.
 *         "Start Time" is the date when the event's processing started.  The
 *         display shows the month, day, hours, minutes, and seconds (MM-dd hh:mm:ss).
 *         "Process Time" is the time taken to process the event in hours,
 *         minutes, seconds, and milliseconds (hhhh:mm:ss.SSS).
 *         "Rx Time" is the date when the event was received via OCI-P and 
 *         stored in the system.  The display shows the month, day, hours, 
 *         minutes, and seconds (MM-dd hh:mm:ss).
 *         "Total Time" is the total time the event was in the system, from the
 *         moment it was received and stored until its processing ended, in 
 *         hours, minutes, seconds, and milliseconds (hhhh:mm:ss.SSS).
 *         "Request" is the name of the OCI-P request that triggered the event.
 *         "Priority" is the priority of the event.
 *
 * @see SystemDeviceManagementEventGetListRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7773","type":"sequence"}]
 */
class SystemDeviceManagementEventGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName eventTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7773
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $eventTable = null;

    /**
     * Getter for eventTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getEventTable()
    {
        return $this->eventTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventTable;
    }

    /**
     * Setter for eventTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $eventTable
     * @return $this
     */
    public function setEventTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $eventTable)
    {
        $this->eventTable = $eventTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventTable()
    {
        $this->eventTable = null;
        return $this;
    }


}

