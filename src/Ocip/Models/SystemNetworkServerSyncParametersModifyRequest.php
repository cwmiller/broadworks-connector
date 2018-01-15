<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersModifyRequest
 *
 * Request to modify Network Server Sync system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

