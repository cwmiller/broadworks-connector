<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkServerSyncParametersGetResponse
 *
 * Response to SystemNetworkServerSyncParametersGetListRequest.
 *         Contains a list of system Network Server Sync parameters.
 *
 * @see SystemNetworkServerSyncParametersGetListRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:5066","type":"sequence"}]
 */
class SystemNetworkServerSyncParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSync
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5066
     * @var bool|null
     */
    private $enableSync = null;

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

