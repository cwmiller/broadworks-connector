<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementAutoRebuildConfigModifyListRequest
 *
 * Request to enable or disable automatic trigger of DM events for
 *         OCI request prefixes, regardless of the request's
 *         version.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemDeviceManagementAutoRebuildConfigModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName autoRebuildConfigEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[]
     */
    private $autoRebuildConfigEntry = array(
        
    );

    /**
     * Getter for autoRebuildConfigEntry
     *
     * @ElementName autoRebuildConfigEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[]
     */
    public function getAutoRebuildConfigEntry()
    {
        return $this->autoRebuildConfigEntry;
    }

    /**
     * Setter for autoRebuildConfigEntry
     *
     * @ElementName autoRebuildConfigEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[] $autoRebuildConfigEntry
     * @return $this
     */
    public function setAutoRebuildConfigEntry($autoRebuildConfigEntry)
    {
        $this->autoRebuildConfigEntry = $autoRebuildConfigEntry;
        return $this;
    }

    /**
     * Adder for autoRebuildConfigEntry
     *
     * @ElementName autoRebuildConfigEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry $autoRebuildConfigEntry
     * @return $this
     */
    public function addAutoRebuildConfigEntry($autoRebuildConfigEntry)
    {
        $this->autoRebuildConfigEntry []= $autoRebuildConfigEntry;
        return $this;
    }


}

