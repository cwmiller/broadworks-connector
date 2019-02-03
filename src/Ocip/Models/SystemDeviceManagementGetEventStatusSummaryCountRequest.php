<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetEventStatusSummaryCountRequest
 *
 * Request a summary table of the number of events in state 'Pending',
 *         'Queued Internally', and 'Completed' in the system per action.
 *         One row is returned per action.
 *         Actions are as per the DeviceManagementEventActionType (ex: Delete, Download, Rebuild, Reset, Upload).
 *         The state 'Queued Internally' includes total for events with status
 *         equal to 'Queued' and 'In Progress' as per DeviceManagementEventStatus.
 *         The response is either SystemDeviceManagementGetEventStatusSummaryCountResponse or ErrorResponse.
 *
 * @see SystemDeviceManagementGetEventStatusSummaryCountResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7130","type":"sequence"}]
 */
class SystemDeviceManagementGetEventStatusSummaryCountRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

