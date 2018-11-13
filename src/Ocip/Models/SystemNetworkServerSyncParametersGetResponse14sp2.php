<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse14sp2
 *
 * Response to SystemNetworkServerSyncParametersGetRequest14sp2.
 *          Contains a list of system Network Server Sync parameters.
 *          Replaced By: SystemNetworkServerSyncParametersGetResponse16
 *
 * @see SystemNetworkServerSyncParametersGetRequest14sp2
 * @see SystemNetworkServerSyncParametersGetResponse16
 */
class SystemNetworkServerSyncParametersGetResponse14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

