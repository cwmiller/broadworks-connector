<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse
 *
 * Response to SystemNetworkServerSyncParametersGetListRequest.
 *         Contains a list of system Network Server Sync parameters.
 */
class SystemNetworkServerSyncParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @var bool|null
     */
    private $enableSync = null;

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


}

