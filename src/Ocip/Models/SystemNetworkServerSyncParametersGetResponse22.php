<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse22
 *
 * Response to SystemNetworkServerSyncParametersGetRequest22.
 *         Contains a list of system Network Server Sync parameters.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 *           
 *         Replaced by: SystemNetworkServerSyncParametersGetResponse24V2 in AS data mode.
 *
 * @see SystemNetworkServerSyncParametersGetRequest22
 * @see SystemNetworkServerSyncParametersGetResponse24V2
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:8692","type":"sequence"}]
 */
class SystemNetworkServerSyncParametersGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8692
     * @var bool|null
     */
    protected $enableSync = null;

    /**
     * @ElementName syncLinePorts
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8692
     * @var bool|null
     */
    protected $syncLinePorts = null;

    /**
     * @ElementName syncDeviceManagementInfo
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8692
     * @var bool|null
     */
    protected $syncDeviceManagementInfo = null;

    /**
     * @ElementName syncTrunkGroups
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8692
     * @var bool|null
     */
    protected $syncTrunkGroups = null;

    /**
     * @ElementName syncEnterpriseNumbers
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:8692
     * @var bool|null
     */
    protected $syncEnterpriseNumbers = null;

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

    /**
     * Getter for syncEnterpriseNumbers
     *
     * @return bool
     */
    public function getSyncEnterpriseNumbers()
    {
        return $this->syncEnterpriseNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->syncEnterpriseNumbers;
    }

    /**
     * Setter for syncEnterpriseNumbers
     *
     * @param bool $syncEnterpriseNumbers
     * @return $this
     */
    public function setSyncEnterpriseNumbers($syncEnterpriseNumbers)
    {
        $this->syncEnterpriseNumbers = $syncEnterpriseNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSyncEnterpriseNumbers()
    {
        $this->syncEnterpriseNumbers = null;
        return $this;
    }


}

