<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringModifyRequest
 *
 * Modify the user's Call Center Monitoring settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"41b968f87257b8dd553215179161ccb4:182","type":"sequence"}]
 */
class UserCallCenterMonitoringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 41b968f87257b8dd553215179161ccb4:182
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName playToneToAgentForSilentMonitoring
     * @Type bool
     * @Optional
     * @Group 41b968f87257b8dd553215179161ccb4:182
     * @var bool|null
     */
    protected $playToneToAgentForSilentMonitoring = null;

    /**
     * @ElementName playToneToAgentForSupervisorCoaching
     * @Type bool
     * @Optional
     * @Group 41b968f87257b8dd553215179161ccb4:182
     * @var bool|null
     */
    protected $playToneToAgentForSupervisorCoaching = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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

