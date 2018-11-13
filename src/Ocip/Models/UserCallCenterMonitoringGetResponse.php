<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetResponse
 *
 * Response to UserCallCenterMonitoringGetRequest.
 *
 * @see UserCallCenterMonitoringGetRequest
 */
class UserCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playToneToAgentForSilentMonitoring
     * @Type bool
     * @var bool|null
     */
    private $playToneToAgentForSilentMonitoring = null;

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


}

