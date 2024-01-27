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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7802","type":"sequence"}]
 */
class SystemDeviceManagementAutoRebuildConfigModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName autoRebuildConfigEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:7802
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[]
     */
    protected $autoRebuildConfigEntry = [
        
    ];

    /**
     * Getter for autoRebuildConfigEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[]
     */
    public function getAutoRebuildConfigEntry()
    {
        return $this->autoRebuildConfigEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoRebuildConfigEntry;
    }

    /**
     * Setter for autoRebuildConfigEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[] $autoRebuildConfigEntry
     * @return $this
     */
    public function setAutoRebuildConfigEntry(array $autoRebuildConfigEntry)
    {
        $this->autoRebuildConfigEntry = $autoRebuildConfigEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoRebuildConfigEntry()
    {
        $this->autoRebuildConfigEntry = null;
        return $this;
    }

    /**
     * Adder for autoRebuildConfigEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry $autoRebuildConfigEntry
     * @return $this
     */
    public function addAutoRebuildConfigEntry($autoRebuildConfigEntry)
    {
        $this->autoRebuildConfigEntry[] = $autoRebuildConfigEntry;
        return $this;
    }
}

