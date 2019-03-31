<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAuditGetResponse23
 *
 * Response to SystemSessionAuditGetRequest23.
 *         The following elements are only used in AS data mode:
 *         msAuditIntervalSeconds, value 1200 is returned in XS data mode
 *
 * @see SystemSessionAuditGetRequest23
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15173","type":"sequence"}]
 */
class SystemSessionAuditGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isAuditActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $isAuditActive = null;

    /**
     * @ElementName auditIntervalSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 60
     * @MaxInclusive 7200
     * @var int|null
     */
    private $auditIntervalSeconds = null;

    /**
     * @ElementName auditTimeoutSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 60
     * @MaxInclusive 600
     * @var int|null
     */
    private $auditTimeoutSeconds = null;

    /**
     * @ElementName releaseCallOnAuditFailure
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $releaseCallOnAuditFailure = null;

    /**
     * @ElementName isSIPRefreshAllowedOnAudit
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $isSIPRefreshAllowedOnAudit = null;

    /**
     * @ElementName allowUpdateForSIPRefresh
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $allowUpdateForSIPRefresh = null;

    /**
     * @ElementName isSIPSessionTimerActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $isSIPSessionTimerActive = null;

    /**
     * @ElementName sipSessionExpiresMinimumSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 30
     * @MaxInclusive 3600
     * @var int|null
     */
    private $sipSessionExpiresMinimumSeconds = null;

    /**
     * @ElementName enforceSIPSessionExpiresMaximum
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $enforceSIPSessionExpiresMaximum = null;

    /**
     * @ElementName sipSessionExpiresMaximumSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 3600
     * @MaxInclusive 86400
     * @var int|null
     */
    private $sipSessionExpiresMaximumSeconds = null;

    /**
     * @ElementName sipSessionExpiresTimerSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    private $sipSessionExpiresTimerSeconds = null;

    /**
     * @ElementName alwaysUseSessionTimerWhenSupported
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $alwaysUseSessionTimerWhenSupported = null;

    /**
     * @ElementName preferredSessionTimerRefresher
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher|null
     */
    private $preferredSessionTimerRefresher = null;

    /**
     * @ElementName enableEmergencyCallAlarmTimer
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $enableEmergencyCallAlarmTimer = null;

    /**
     * @ElementName emergencyCallAlarmMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 1
     * @MaxInclusive 1440
     * @var int|null
     */
    private $emergencyCallAlarmMinutes = null;

    /**
     * @ElementName enableEmergencyCallCleanupTimer
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $enableEmergencyCallCleanupTimer = null;

    /**
     * @ElementName emergencyCallCleanupMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 1
     * @MaxInclusive 1440
     * @var int|null
     */
    private $emergencyCallCleanupMinutes = null;

    /**
     * @ElementName alwaysAllowRefreshForMS
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @var bool|null
     */
    private $alwaysAllowRefreshForMS = null;

    /**
     * @ElementName msAuditIntervalSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15173
     * @MinInclusive 60
     * @MaxInclusive 7200
     * @var int|null
     */
    private $msAuditIntervalSeconds = null;

    /**
     * Getter for isAuditActive
     *
     * @return bool
     */
    public function getIsAuditActive()
    {
        return $this->isAuditActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAuditActive;
    }

    /**
     * Setter for isAuditActive
     *
     * @param bool $isAuditActive
     * @return $this
     */
    public function setIsAuditActive($isAuditActive)
    {
        $this->isAuditActive = $isAuditActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAuditActive()
    {
        $this->isAuditActive = null;
        return $this;
    }

    /**
     * Getter for auditIntervalSeconds
     *
     * @return int
     */
    public function getAuditIntervalSeconds()
    {
        return $this->auditIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->auditIntervalSeconds;
    }

    /**
     * Setter for auditIntervalSeconds
     *
     * @param int $auditIntervalSeconds
     * @return $this
     */
    public function setAuditIntervalSeconds($auditIntervalSeconds)
    {
        $this->auditIntervalSeconds = $auditIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuditIntervalSeconds()
    {
        $this->auditIntervalSeconds = null;
        return $this;
    }

    /**
     * Getter for auditTimeoutSeconds
     *
     * @return int
     */
    public function getAuditTimeoutSeconds()
    {
        return $this->auditTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->auditTimeoutSeconds;
    }

    /**
     * Setter for auditTimeoutSeconds
     *
     * @param int $auditTimeoutSeconds
     * @return $this
     */
    public function setAuditTimeoutSeconds($auditTimeoutSeconds)
    {
        $this->auditTimeoutSeconds = $auditTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuditTimeoutSeconds()
    {
        $this->auditTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for releaseCallOnAuditFailure
     *
     * @return bool
     */
    public function getReleaseCallOnAuditFailure()
    {
        return $this->releaseCallOnAuditFailure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->releaseCallOnAuditFailure;
    }

    /**
     * Setter for releaseCallOnAuditFailure
     *
     * @param bool $releaseCallOnAuditFailure
     * @return $this
     */
    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure)
    {
        $this->releaseCallOnAuditFailure = $releaseCallOnAuditFailure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReleaseCallOnAuditFailure()
    {
        $this->releaseCallOnAuditFailure = null;
        return $this;
    }

    /**
     * Getter for isSIPRefreshAllowedOnAudit
     *
     * @return bool
     */
    public function getIsSIPRefreshAllowedOnAudit()
    {
        return $this->isSIPRefreshAllowedOnAudit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isSIPRefreshAllowedOnAudit;
    }

    /**
     * Setter for isSIPRefreshAllowedOnAudit
     *
     * @param bool $isSIPRefreshAllowedOnAudit
     * @return $this
     */
    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit)
    {
        $this->isSIPRefreshAllowedOnAudit = $isSIPRefreshAllowedOnAudit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsSIPRefreshAllowedOnAudit()
    {
        $this->isSIPRefreshAllowedOnAudit = null;
        return $this;
    }

    /**
     * Getter for allowUpdateForSIPRefresh
     *
     * @return bool
     */
    public function getAllowUpdateForSIPRefresh()
    {
        return $this->allowUpdateForSIPRefresh instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUpdateForSIPRefresh;
    }

    /**
     * Setter for allowUpdateForSIPRefresh
     *
     * @param bool $allowUpdateForSIPRefresh
     * @return $this
     */
    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh)
    {
        $this->allowUpdateForSIPRefresh = $allowUpdateForSIPRefresh;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUpdateForSIPRefresh()
    {
        $this->allowUpdateForSIPRefresh = null;
        return $this;
    }

    /**
     * Getter for isSIPSessionTimerActive
     *
     * @return bool
     */
    public function getIsSIPSessionTimerActive()
    {
        return $this->isSIPSessionTimerActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isSIPSessionTimerActive;
    }

    /**
     * Setter for isSIPSessionTimerActive
     *
     * @param bool $isSIPSessionTimerActive
     * @return $this
     */
    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive)
    {
        $this->isSIPSessionTimerActive = $isSIPSessionTimerActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsSIPSessionTimerActive()
    {
        $this->isSIPSessionTimerActive = null;
        return $this;
    }

    /**
     * Getter for sipSessionExpiresMinimumSeconds
     *
     * @return int
     */
    public function getSipSessionExpiresMinimumSeconds()
    {
        return $this->sipSessionExpiresMinimumSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipSessionExpiresMinimumSeconds;
    }

    /**
     * Setter for sipSessionExpiresMinimumSeconds
     *
     * @param int $sipSessionExpiresMinimumSeconds
     * @return $this
     */
    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds)
    {
        $this->sipSessionExpiresMinimumSeconds = $sipSessionExpiresMinimumSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipSessionExpiresMinimumSeconds()
    {
        $this->sipSessionExpiresMinimumSeconds = null;
        return $this;
    }

    /**
     * Getter for enforceSIPSessionExpiresMaximum
     *
     * @return bool
     */
    public function getEnforceSIPSessionExpiresMaximum()
    {
        return $this->enforceSIPSessionExpiresMaximum instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceSIPSessionExpiresMaximum;
    }

    /**
     * Setter for enforceSIPSessionExpiresMaximum
     *
     * @param bool $enforceSIPSessionExpiresMaximum
     * @return $this
     */
    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum)
    {
        $this->enforceSIPSessionExpiresMaximum = $enforceSIPSessionExpiresMaximum;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceSIPSessionExpiresMaximum()
    {
        $this->enforceSIPSessionExpiresMaximum = null;
        return $this;
    }

    /**
     * Getter for sipSessionExpiresMaximumSeconds
     *
     * @return int
     */
    public function getSipSessionExpiresMaximumSeconds()
    {
        return $this->sipSessionExpiresMaximumSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipSessionExpiresMaximumSeconds;
    }

    /**
     * Setter for sipSessionExpiresMaximumSeconds
     *
     * @param int $sipSessionExpiresMaximumSeconds
     * @return $this
     */
    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds)
    {
        $this->sipSessionExpiresMaximumSeconds = $sipSessionExpiresMaximumSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipSessionExpiresMaximumSeconds()
    {
        $this->sipSessionExpiresMaximumSeconds = null;
        return $this;
    }

    /**
     * Getter for sipSessionExpiresTimerSeconds
     *
     * @return int
     */
    public function getSipSessionExpiresTimerSeconds()
    {
        return $this->sipSessionExpiresTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipSessionExpiresTimerSeconds;
    }

    /**
     * Setter for sipSessionExpiresTimerSeconds
     *
     * @param int $sipSessionExpiresTimerSeconds
     * @return $this
     */
    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds)
    {
        $this->sipSessionExpiresTimerSeconds = $sipSessionExpiresTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipSessionExpiresTimerSeconds()
    {
        $this->sipSessionExpiresTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for alwaysUseSessionTimerWhenSupported
     *
     * @return bool
     */
    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return $this->alwaysUseSessionTimerWhenSupported instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysUseSessionTimerWhenSupported;
    }

    /**
     * Setter for alwaysUseSessionTimerWhenSupported
     *
     * @param bool $alwaysUseSessionTimerWhenSupported
     * @return $this
     */
    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported)
    {
        $this->alwaysUseSessionTimerWhenSupported = $alwaysUseSessionTimerWhenSupported;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysUseSessionTimerWhenSupported()
    {
        $this->alwaysUseSessionTimerWhenSupported = null;
        return $this;
    }

    /**
     * Getter for preferredSessionTimerRefresher
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher
     */
    public function getPreferredSessionTimerRefresher()
    {
        return $this->preferredSessionTimerRefresher instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredSessionTimerRefresher;
    }

    /**
     * Setter for preferredSessionTimerRefresher
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher $preferredSessionTimerRefresher
     * @return $this
     */
    public function setPreferredSessionTimerRefresher(\CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher $preferredSessionTimerRefresher)
    {
        $this->preferredSessionTimerRefresher = $preferredSessionTimerRefresher;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredSessionTimerRefresher()
    {
        $this->preferredSessionTimerRefresher = null;
        return $this;
    }

    /**
     * Getter for enableEmergencyCallAlarmTimer
     *
     * @return bool
     */
    public function getEnableEmergencyCallAlarmTimer()
    {
        return $this->enableEmergencyCallAlarmTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEmergencyCallAlarmTimer;
    }

    /**
     * Setter for enableEmergencyCallAlarmTimer
     *
     * @param bool $enableEmergencyCallAlarmTimer
     * @return $this
     */
    public function setEnableEmergencyCallAlarmTimer($enableEmergencyCallAlarmTimer)
    {
        $this->enableEmergencyCallAlarmTimer = $enableEmergencyCallAlarmTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEmergencyCallAlarmTimer()
    {
        $this->enableEmergencyCallAlarmTimer = null;
        return $this;
    }

    /**
     * Getter for emergencyCallAlarmMinutes
     *
     * @return int
     */
    public function getEmergencyCallAlarmMinutes()
    {
        return $this->emergencyCallAlarmMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallAlarmMinutes;
    }

    /**
     * Setter for emergencyCallAlarmMinutes
     *
     * @param int $emergencyCallAlarmMinutes
     * @return $this
     */
    public function setEmergencyCallAlarmMinutes($emergencyCallAlarmMinutes)
    {
        $this->emergencyCallAlarmMinutes = $emergencyCallAlarmMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyCallAlarmMinutes()
    {
        $this->emergencyCallAlarmMinutes = null;
        return $this;
    }

    /**
     * Getter for enableEmergencyCallCleanupTimer
     *
     * @return bool
     */
    public function getEnableEmergencyCallCleanupTimer()
    {
        return $this->enableEmergencyCallCleanupTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEmergencyCallCleanupTimer;
    }

    /**
     * Setter for enableEmergencyCallCleanupTimer
     *
     * @param bool $enableEmergencyCallCleanupTimer
     * @return $this
     */
    public function setEnableEmergencyCallCleanupTimer($enableEmergencyCallCleanupTimer)
    {
        $this->enableEmergencyCallCleanupTimer = $enableEmergencyCallCleanupTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEmergencyCallCleanupTimer()
    {
        $this->enableEmergencyCallCleanupTimer = null;
        return $this;
    }

    /**
     * Getter for emergencyCallCleanupMinutes
     *
     * @return int
     */
    public function getEmergencyCallCleanupMinutes()
    {
        return $this->emergencyCallCleanupMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallCleanupMinutes;
    }

    /**
     * Setter for emergencyCallCleanupMinutes
     *
     * @param int $emergencyCallCleanupMinutes
     * @return $this
     */
    public function setEmergencyCallCleanupMinutes($emergencyCallCleanupMinutes)
    {
        $this->emergencyCallCleanupMinutes = $emergencyCallCleanupMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyCallCleanupMinutes()
    {
        $this->emergencyCallCleanupMinutes = null;
        return $this;
    }

    /**
     * Getter for alwaysAllowRefreshForMS
     *
     * @return bool
     */
    public function getAlwaysAllowRefreshForMS()
    {
        return $this->alwaysAllowRefreshForMS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysAllowRefreshForMS;
    }

    /**
     * Setter for alwaysAllowRefreshForMS
     *
     * @param bool $alwaysAllowRefreshForMS
     * @return $this
     */
    public function setAlwaysAllowRefreshForMS($alwaysAllowRefreshForMS)
    {
        $this->alwaysAllowRefreshForMS = $alwaysAllowRefreshForMS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysAllowRefreshForMS()
    {
        $this->alwaysAllowRefreshForMS = null;
        return $this;
    }

    /**
     * Getter for msAuditIntervalSeconds
     *
     * @return int
     */
    public function getMsAuditIntervalSeconds()
    {
        return $this->msAuditIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->msAuditIntervalSeconds;
    }

    /**
     * Setter for msAuditIntervalSeconds
     *
     * @param int $msAuditIntervalSeconds
     * @return $this
     */
    public function setMsAuditIntervalSeconds($msAuditIntervalSeconds)
    {
        $this->msAuditIntervalSeconds = $msAuditIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMsAuditIntervalSeconds()
    {
        $this->msAuditIntervalSeconds = null;
        return $this;
    }


}

