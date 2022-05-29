<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse24V2
 *
 * Response to SystemNetworkServerSyncParametersGetRequest24V2.
 *         Contains a list of system Network Server Sync parameters.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 *
 * @see SystemNetworkServerSyncParametersGetRequest24V2
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12799","type":"sequence"}]
 */
class SystemNetworkServerSyncParametersGetResponse24V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12799
     * @var bool|null
     */
    protected $enableSync = null;

    /**
     * @ElementName syncLinePorts
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12799
     * @var bool|null
     */
    protected $syncLinePorts = null;

    /**
     * @ElementName syncDeviceManagementInfo
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12799
     * @var bool|null
     */
    protected $syncDeviceManagementInfo = null;

    /**
     * @ElementName syncTrunkGroups
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12799
     * @var bool|null
     */
    protected $syncTrunkGroups = null;

    /**
     * @ElementName syncConnectionTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12799
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $syncConnectionTimeoutSeconds = null;

    /**
     * @ElementName syncEnterpriseNumbers
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12799
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
     * Getter for syncConnectionTimeoutSeconds
     *
     * @return int
     */
    public function getSyncConnectionTimeoutSeconds()
    {
        return $this->syncConnectionTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->syncConnectionTimeoutSeconds;
    }

    /**
     * Setter for syncConnectionTimeoutSeconds
     *
     * @param int $syncConnectionTimeoutSeconds
     * @return $this
     */
    public function setSyncConnectionTimeoutSeconds($syncConnectionTimeoutSeconds)
    {
        $this->syncConnectionTimeoutSeconds = $syncConnectionTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSyncConnectionTimeoutSeconds()
    {
        $this->syncConnectionTimeoutSeconds = null;
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

