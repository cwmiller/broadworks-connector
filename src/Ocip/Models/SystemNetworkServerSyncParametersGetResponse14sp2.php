<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse14sp2
 *
 * Response to SystemNetworkServerSyncParametersGetRequest14sp2.
 *          Contains a list of system Network Server Sync parameters.
 *          Replaced By: SystemNetworkServerSyncParametersGetResponse16
 */
class SystemNetworkServerSyncParametersGetResponse14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

