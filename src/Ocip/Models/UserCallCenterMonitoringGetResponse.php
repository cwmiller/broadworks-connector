<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetResponse
 *
 * Response to UserCallCenterMonitoringGetRequest.
 */
class UserCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playToneToAgentForSilentMonitoring
     * @var bool|null
     */
    private $playToneToAgentForSilentMonitoring = null;

    /**
     * Getter for playToneToAgentForSilentMonitoring
     *
     * @ElementName playToneToAgentForSilentMonitoring
     * @return bool|null
     */
    public function getPlayToneToAgentForSilentMonitoring()
    {
        return $this->playToneToAgentForSilentMonitoring;
    }

    /**
     * Setter for playToneToAgentForSilentMonitoring
     *
     * @ElementName playToneToAgentForSilentMonitoring
     * @param bool|null $playToneToAgentForSilentMonitoring
     * @return $this
     */
    public function setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring)
    {
        $this->playToneToAgentForSilentMonitoring = $playToneToAgentForSilentMonitoring;
        return $this;
    }


}

