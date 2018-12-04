<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementAutoRebuildConfigGetListResponse
 *
 * Response to SystemDeviceManagementAutoRebuildConfigGetListRequest.
 *         Contains a table with column headings: "OCI Request Prefix", "Auto Rebuild Enabled".
 *         "OCI Request Prefix" is the prefix of the OCI request name.  It does
 *         not include the request's version '17.sp4, 18...' since the disabled
 *         flag applies to the whole series of requests, independent of the
 *         version.
 *         "Auto Rebuild Enabled": 'True' if the request prefix triggers DM events
 *         automatically.  Otherwise, automatic DM events are not generated.
 *
 * @see SystemDeviceManagementAutoRebuildConfigGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:6557","type":"sequence"}]
 */
class SystemDeviceManagementAutoRebuildConfigGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName autoRebuildConfigTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6557
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $autoRebuildConfigTable = null;

    /**
     * Getter for autoRebuildConfigTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAutoRebuildConfigTable()
    {
        return $this->autoRebuildConfigTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoRebuildConfigTable;
    }

    /**
     * Setter for autoRebuildConfigTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $autoRebuildConfigTable
     * @return $this
     */
    public function setAutoRebuildConfigTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $autoRebuildConfigTable)
    {
        $this->autoRebuildConfigTable = $autoRebuildConfigTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoRebuildConfigTable()
    {
        $this->autoRebuildConfigTable = null;
        return $this;
    }


}

