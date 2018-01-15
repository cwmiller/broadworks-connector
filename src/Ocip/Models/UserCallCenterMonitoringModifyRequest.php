<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringModifyRequest
 *
 * Modify the user's Call Center Monitoring settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterMonitoringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName playToneToAgentForSilentMonitoring
     * @var bool|null
     */
    private $playToneToAgentForSilentMonitoring = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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

