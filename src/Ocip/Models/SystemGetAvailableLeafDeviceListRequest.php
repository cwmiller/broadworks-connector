<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetAvailableLeafDeviceListRequest
 *
 * Requests the list of available leaf devices that can be linked to a tree device for the entire system.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device". It can be linked to only one tree device.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         The response is either SystemGetAvailableLeafDeviceListResponse or
 *         ErrorResponse.
 *
 * @see SystemGetAvailableLeafDeviceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10643","type":"sequence"}]
 */
class SystemGetAvailableLeafDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

