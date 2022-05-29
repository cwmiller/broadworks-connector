<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRuntimeDataPublicationModifyRequest
 *
 * Modify the system call admission control parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *         enableRuntimeDataSync,
 *         runtimeIntervalInMilliSeconds
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15610","type":"sequence"}]
 */
class SystemRuntimeDataPublicationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableRuntimeDataSync
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15610
     * @var bool|null
     */
    protected $enableRuntimeDataSync = null;

    /**
     * @ElementName runtimeDataSyncIntervalInMilliSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15610
     * @MinInclusive 500
     * @MaxInclusive 360000
     * @var int|null
     */
    protected $runtimeDataSyncIntervalInMilliSeconds = null;

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

