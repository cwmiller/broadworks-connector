<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterMonitoringGetResponse
 *
 * Response to GroupCallCenterMonitoringGetRequest.
 *
 * @see GroupCallCenterMonitoringGetRequest
 * @Groups [{"id":"41b968f87257b8dd553215179161ccb4:116","type":"sequence"}]
 */
class GroupCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSupervisorCoaching
     * @Type bool
     * @Group 41b968f87257b8dd553215179161ccb4:116
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

