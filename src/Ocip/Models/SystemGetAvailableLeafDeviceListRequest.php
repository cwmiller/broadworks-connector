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
 *         Replaced by: SystemGetAvailableLeafDeviceListRequest22.
 *
 * @see SystemGetAvailableLeafDeviceListResponse
 * @see ErrorResponse
 * @see SystemGetAvailableLeafDeviceListRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27447","type":"sequence"}]
 */
class SystemGetAvailableLeafDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

