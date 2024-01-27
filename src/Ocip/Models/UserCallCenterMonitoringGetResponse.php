<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetResponse
 *
 * Response to UserCallCenterMonitoringGetRequest.
 *         Replaced by UserCallCenterMonitoringGetResponse23
 *
 * @see UserCallCenterMonitoringGetRequest
 * @see UserCallCenterMonitoringGetResponse23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:41355","type":"sequence"}]
 */
class UserCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName playToneToAgentForSilentMonitoring
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:41355
     * @var bool|null
     */
    protected $playToneToAgentForSilentMonitoring = null;

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

