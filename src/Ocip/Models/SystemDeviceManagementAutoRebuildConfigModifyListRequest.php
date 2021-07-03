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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7689","type":"sequence"}]
 */
class SystemDeviceManagementAutoRebuildConfigModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName autoRebuildConfigEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7689
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementAutoRebuildConfigEntry[]
     */
    private $autoRebuildConfigEntry = array(
        
    );

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

