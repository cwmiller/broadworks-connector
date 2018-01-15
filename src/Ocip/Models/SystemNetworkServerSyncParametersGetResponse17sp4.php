<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse17sp4
 *
 * Response to SystemNetworkServerSyncParametersGetRequest17sp4.
 *         Contains a list of system Network Server Sync parameters.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @var bool|null
     */
    private $enableSync = null;

    /**
     * @ElementName syncLinePorts
     * @var bool|null
     */
    private $syncLinePorts = null;

    /**
     * @ElementName syncDeviceManagementInfo
     * @var bool|null
     */
    private $syncDeviceManagementInfo = null;

    /**
     * @ElementName syncTrunkGroups
     * @var bool|null
     */
    private $syncTrunkGroups = null;

    /**
     * Getter for enableSync
     *
     * @ElementName enableSync
     * @return bool|null
     */
    public function getEnableSync()
    {
        return $this->enableSync;
    }

    /**
     * Setter for enableSync
     *
     * @ElementName enableSync
     * @param bool|null $enableSync
     * @return $this
     */
    public function setEnableSync($enableSync)
    {
        $this->enableSync = $enableSync;
        return $this;
    }

    /**
     * Getter for syncLinePorts
     *
     * @ElementName syncLinePorts
     * @return bool|null
     */
    public function getSyncLinePorts()
    {
        return $this->syncLinePorts;
    }

    /**
     * Setter for syncLinePorts
     *
     * @ElementName syncLinePorts
     * @param bool|null $syncLinePorts
     * @return $this
     */
    public function setSyncLinePorts($syncLinePorts)
    {
        $this->syncLinePorts = $syncLinePorts;
        return $this;
    }

    /**
     * Getter for syncDeviceManagementInfo
     *
     * @ElementName syncDeviceManagementInfo
     * @return bool|null
     */
    public function getSyncDeviceManagementInfo()
    {
        return $this->syncDeviceManagementInfo;
    }

    /**
     * Setter for syncDeviceManagementInfo
     *
     * @ElementName syncDeviceManagementInfo
     * @param bool|null $syncDeviceManagementInfo
     * @return $this
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo)
    {
        $this->syncDeviceManagementInfo = $syncDeviceManagementInfo;
        return $this;
    }

    /**
     * Getter for syncTrunkGroups
     *
     * @ElementName syncTrunkGroups
     * @return bool|null
     */
    public function getSyncTrunkGroups()
    {
        return $this->syncTrunkGroups;
    }

    /**
     * Setter for syncTrunkGroups
     *
     * @ElementName syncTrunkGroups
     * @param bool|null $syncTrunkGroups
     * @return $this
     */
    public function setSyncTrunkGroups($syncTrunkGroups)
    {
        $this->syncTrunkGroups = $syncTrunkGroups;
        return $this;
    }


}

