<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse16
 *
 * Response to SystemNetworkServerSyncParametersGetRequest16.
 *         Contains a list of system Network Server Sync parameters.
 *         Replaced By: SystemNetworkServerSyncParametersGetResponse17sp4
 *
 * @see SystemNetworkServerSyncParametersGetRequest16
 * @see SystemNetworkServerSyncParametersGetResponse17sp4
 */
class SystemNetworkServerSyncParametersGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @Type bool
     * @var bool|null
     */
    private $enableSync = null;

    /**
     * @ElementName syncLinePorts
     * @Type bool
     * @var bool|null
     */
    private $syncLinePorts = null;

    /**
     * @ElementName syncDeviceManagementInfo
     * @Type bool
     * @var bool|null
     */
    private $syncDeviceManagementInfo = null;

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


}

