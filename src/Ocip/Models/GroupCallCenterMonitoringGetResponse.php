<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterMonitoringGetResponse
 *
 * Response to GroupCallCenterMonitoringGetRequest.
 *
 * @see GroupCallCenterMonitoringGetRequest
 * @Groups [{"id":"b5e86c5d60603bdb61de308d278500d9:115","type":"sequence"}]
 */
class GroupCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableSupervisorCoaching
     * @Type bool
     * @Group b5e86c5d60603bdb61de308d278500d9:115
     * @var bool|null
     */
    protected $enableSupervisorCoaching = null;

    /**
     * Getter for enableSupervisorCoaching
     *
     * @return bool
     */
    public function getEnableSupervisorCoaching()
    {
        return $this->enableSupervisorCoaching instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSupervisorCoaching;
    }

    /**
     * Setter for enableSupervisorCoaching
     *
     * @param bool $enableSupervisorCoaching
     * @return $this
     */
    public function setEnableSupervisorCoaching($enableSupervisorCoaching)
    {
        $this->enableSupervisorCoaching = $enableSupervisorCoaching;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSupervisorCoaching()
    {
        $this->enableSupervisorCoaching = null;
        return $this;
    }
}

