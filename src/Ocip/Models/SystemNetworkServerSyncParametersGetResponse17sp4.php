<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse17sp4
 *
 * Response to SystemNetworkServerSyncParametersGetRequest17sp4.
 *         Contains a list of system Network Server Sync parameters.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 *           
 *         Replaced by: SystemNetworkServerSyncParametersGetResponse24
 *
 * @see SystemNetworkServerSyncParametersGetRequest17sp4
 * @see SystemNetworkServerSyncParametersGetResponse24
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:8669","type":"sequence"}]
 */
class SystemNetworkServerSyncParametersGetResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8669
     * @var bool|null
     */
    private $enableSync = null;

    /**
     * @ElementName syncLinePorts
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8669
     * @var bool|null
     */
    private $syncLinePorts = null;

    /**
     * @ElementName syncDeviceManagementInfo
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8669
     * @var bool|null
     */
    private $syncDeviceManagementInfo = null;

    /**
     * @ElementName syncTrunkGroups
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8669
     * @var bool|null
     */
    private $syncTrunkGroups = null;

    /**
     * Getter for enableSync
     *
     * @return bool
     */
    public function getEnableSync()
    {
        return $this->enableSync instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSync;
    }

    /**
     * Setter for enableSync
     *
     * @param bool $enableSync
     * @return $this
     */
    public function setEnableSync($enableSync)
    {
        $this->enableSync = $enableSync;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSync()
    {
        $this->enableSync = null;
        return $this;
    }

    /**
     * Getter for syncLinePorts
     *
     * @return bool
     */
    public function getSyncLinePorts()
    {
        return $this->syncLinePorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->syncLinePorts;
    }

    /**
     * Setter for syncLinePorts
     *
     * @param bool $syncLinePorts
     * @return $this
     */
    public function setSyncLinePorts($syncLinePorts)
    {
        $this->syncLinePorts = $syncLinePorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSyncLinePorts()
    {
        $this->syncLinePorts = null;
        return $this;
    }

    /**
     * Getter for syncDeviceManagementInfo
     *
     * @return bool
     */
    public function getSyncDeviceManagementInfo()
    {
        return $this->syncDeviceManagementInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->syncDeviceManagementInfo;
    }

    /**
     * Setter for syncDeviceManagementInfo
     *
     * @param bool $syncDeviceManagementInfo
     * @return $this
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo)
    {
        $this->syncDeviceManagementInfo = $syncDeviceManagementInfo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSyncDeviceManagementInfo()
    {
        $this->syncDeviceManagementInfo = null;
        return $this;
    }

    /**
     * Getter for syncTrunkGroups
     *
     * @return bool
     */
    public function getSyncTrunkGroups()
    {
        return $this->syncTrunkGroups instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->syncTrunkGroups;
    }

    /**
     * Setter for syncTrunkGroups
     *
     * @param bool $syncTrunkGroups
     * @return $this
     */
    public function setSyncTrunkGroups($syncTrunkGroups)
    {
        $this->syncTrunkGroups = $syncTrunkGroups;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSyncTrunkGroups()
    {
        $this->syncTrunkGroups = null;
        return $this;
    }


}

