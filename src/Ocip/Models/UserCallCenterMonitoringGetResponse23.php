<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetResponse23
 *
 * Response to UserCallCenterMonitoringGetRequest23.
 *
 * @see UserCallCenterMonitoringGetRequest23
 * @Groups [{"id":"41b968f87257b8dd553215179161ccb4:164","type":"sequence"}]
 */
class UserCallCenterMonitoringGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playToneToAgentForSilentMonitoring
     * @Type bool
     * @Group 41b968f87257b8dd553215179161ccb4:164
     * @var bool|null
     */
    private $playToneToAgentForSilentMonitoring = null;

    /**
     * @ElementName playToneToAgentForSupervisorCoaching
     * @Type bool
     * @Group 41b968f87257b8dd553215179161ccb4:164
     * @var bool|null
     */
    private $playToneToAgentForSupervisorCoaching = null;

    /**
     * Getter for playToneToAgentForSilentMonitoring
     *
     * @return bool
     */
    public function getPlayToneToAgentForSilentMonitoring()
    {
        return $this->playToneToAgentForSilentMonitoring instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playToneToAgentForSilentMonitoring;
    }

    /**
     * Setter for playToneToAgentForSilentMonitoring
     *
     * @param bool $playToneToAgentForSilentMonitoring
     * @return $this
     */
    public function setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring)
    {
        $this->playToneToAgentForSilentMonitoring = $playToneToAgentForSilentMonitoring;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayToneToAgentForSilentMonitoring()
    {
        $this->playToneToAgentForSilentMonitoring = null;
        return $this;
    }

    /**
     * Getter for playToneToAgentForSupervisorCoaching
     *
     * @return bool
     */
    public function getPlayToneToAgentForSupervisorCoaching()
    {
        return $this->playToneToAgentForSupervisorCoaching instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playToneToAgentForSupervisorCoaching;
    }

    /**
     * Setter for playToneToAgentForSupervisorCoaching
     *
     * @param bool $playToneToAgentForSupervisorCoaching
     * @return $this
     */
    public function setPlayToneToAgentForSupervisorCoaching($playToneToAgentForSupervisorCoaching)
    {
        $this->playToneToAgentForSupervisorCoaching = $playToneToAgentForSupervisorCoaching;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayToneToAgentForSupervisorCoaching()
    {
        $this->playToneToAgentForSupervisorCoaching = null;
        return $this;
    }


}

