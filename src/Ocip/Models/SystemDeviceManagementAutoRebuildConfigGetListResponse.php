<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementAutoRebuildConfigGetListResponse
 *
 * Response to SystemDeviceManagementAutoRebuildConfigGetListRequest.
 *         Contains a table with column headings: "OCI Request Prefix", "Auto
 * Rebuild Enabled".
 *         "OCI Request Prefix" is the prefix of the OCI request name.  It does
 *         not include the request's version '17.sp4, 18...' since the disabled
 *         flag applies to the whole series of requests, independent of the
 *         version.
 *         "Auto Rebuild Enabled": 'True' if the request prefix triggers DM events
 *         automatically.  Otherwise, automatic DM events are not generated.
 *
 * @see SystemDeviceManagementAutoRebuildConfigGetListRequest
 */
class SystemDeviceManagementAutoRebuildConfigGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName autoRebuildConfigTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $autoRebuildConfigTable = null;

    /**
     * Getter for autoRebuildConfigTable
     *
     * @ElementName autoRebuildConfigTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAutoRebuildConfigTable()
    {
        return $this->autoRebuildConfigTable;
    }

    /**
     * Setter for autoRebuildConfigTable
     *
     * @ElementName autoRebuildConfigTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $autoRebuildConfigTable
     * @return $this
     */
    public function setAutoRebuildConfigTable($autoRebuildConfigTable)
    {
        $this->autoRebuildConfigTable = $autoRebuildConfigTable;
        return $this;
    }


}

