<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse
 *
 * Response to SystemNetworkServerSyncParametersGetListRequest.
 *         Contains a list of system Network Server Sync parameters.
 *
 * @see SystemNetworkServerSyncParametersGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28388","type":"sequence"}]
 */
class SystemNetworkServerSyncParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableSync
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28388
     * @var bool|null
     */
    protected $enableSync = null;

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
}

