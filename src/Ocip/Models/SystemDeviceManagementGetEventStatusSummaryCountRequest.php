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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7951","type":"sequence"}]
 */
class SystemDeviceManagementGetEventStatusSummaryCountRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

