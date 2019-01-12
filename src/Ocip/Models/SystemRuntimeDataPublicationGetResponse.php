<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRuntimeDataPublicationGetResponse
 *
 * Response to the SystemRuntimeDataPublicationGetRequest.
 *         The response contains the system call admission control parameters information.
 *         The following elements are only used in AS data mode:
 *           enableRuntimeDataSync, value "false" is returned in XS data mode.
 *           runtimeDataSyncIntervalInMilliSeconds value "1000" is returned in XS data mode.
 *
 * @see SystemRuntimeDataPublicationGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13895","type":"sequence"}]
 */
class SystemRuntimeDataPublicationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableRuntimeDataSync
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13895
     * @var bool|null
     */
    private $enableRuntimeDataSync = null;

    /**
     * @ElementName runtimeDataSyncIntervalInMilliSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13895
     * @var int|null
     */
    private $runtimeDataSyncIntervalInMilliSeconds = null;

    /**
     * Getter for enableRuntimeDataSync
     *
     * @return bool
     */
    public function getEnableRuntimeDataSync()
    {
        return $this->enableRuntimeDataSync instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRuntimeDataSync;
    }

    /**
     * Setter for enableRuntimeDataSync
     *
     * @param bool $enableRuntimeDataSync
     * @return $this
     */
    public function setEnableRuntimeDataSync($enableRuntimeDataSync)
    {
        $this->enableRuntimeDataSync = $enableRuntimeDataSync;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRuntimeDataSync()
    {
        $this->enableRuntimeDataSync = null;
        return $this;
    }

    /**
     * Getter for runtimeDataSyncIntervalInMilliSeconds
     *
     * @return int
     */
    public function getRuntimeDataSyncIntervalInMilliSeconds()
    {
        return $this->runtimeDataSyncIntervalInMilliSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->runtimeDataSyncIntervalInMilliSeconds;
    }

    /**
     * Setter for runtimeDataSyncIntervalInMilliSeconds
     *
     * @param int $runtimeDataSyncIntervalInMilliSeconds
     * @return $this
     */
    public function setRuntimeDataSyncIntervalInMilliSeconds($runtimeDataSyncIntervalInMilliSeconds)
    {
        $this->runtimeDataSyncIntervalInMilliSeconds = $runtimeDataSyncIntervalInMilliSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRuntimeDataSyncIntervalInMilliSeconds()
    {
        $this->runtimeDataSyncIntervalInMilliSeconds = null;
        return $this;
    }


}

