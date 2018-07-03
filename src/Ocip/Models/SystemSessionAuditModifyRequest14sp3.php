<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAuditModifyRequest14sp3
 *
 * Modify the system level data associated with session audit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSessionAuditModifyRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isAuditActive
     * @var bool|null
     */
    private $isAuditActive = null;

    /**
     * @ElementName auditIntervalSeconds
     * @var int|null
     */
    private $auditIntervalSeconds = null;

    /**
     * @ElementName auditTimeoutSeconds
     * @var int|null
     */
    private $auditTimeoutSeconds = null;

    /**
     * @ElementName releaseCallOnAuditFailure
     * @var bool|null
     */
    private $releaseCallOnAuditFailure = null;

    /**
     * @ElementName isSIPRefreshAllowedOnAudit
     * @var bool|null
     */
    private $isSIPRefreshAllowedOnAudit = null;

    /**
     * @ElementName allowUpdateForSIPRefresh
     * @var bool|null
     */
    private $allowUpdateForSIPRefresh = null;

    /**
     * @ElementName isSIPSessionTimerActive
     * @var bool|null
     */
    private $isSIPSessionTimerActive = null;

    /**
     * @ElementName sipSessionExpiresMinimumSeconds
     * @var int|null
     */
    private $sipSessionExpiresMinimumSeconds = null;

    /**
     * @ElementName enforceSIPSessionExpiresMaximum
     * @var bool|null
     */
    private $enforceSIPSessionExpiresMaximum = null;

    /**
     * @ElementName sipSessionExpiresMaximumSeconds
     * @var int|null
     */
    private $sipSessionExpiresMaximumSeconds = null;

    /**
     * @ElementName sipSessionExpiresTimerSeconds
     * @var int|null
     */
    private $sipSessionExpiresTimerSeconds = null;

    /**
     * @ElementName alwaysUseSessionTimerWhenSupported
     * @var bool|null
     */
    private $alwaysUseSessionTimerWhenSupported = null;

    /**
     * @ElementName preferredSessionTimerRefresher
     * @var string|null
     */
    private $preferredSessionTimerRefresher = null;

    /**
     * @ElementName enableEmergencyCallAlarmTimer
     * @var bool|null
     */
    private $enableEmergencyCallAlarmTimer = null;

    /**
     * @ElementName emergencyCallAlarmMinutes
     * @var int|null
     */
    private $emergencyCallAlarmMinutes = null;

    /**
     * @ElementName enableEmergencyCallCleanupTimer
     * @var bool|null
     */
    private $enableEmergencyCallCleanupTimer = null;

    /**
     * @ElementName emergencyCallCleanupMinutes
     * @var int|null
     */
    private $emergencyCallCleanupMinutes = null;

    /**
     * Getter for isAuditActive
     *
     * @ElementName isAuditActive
     * @return bool|null
     */
    public function getIsAuditActive()
    {
        return $this->isAuditActive;
    }

    /**
     * Setter for isAuditActive
     *
     * @ElementName isAuditActive
     * @param bool|null $isAuditActive
     * @return $this
     */
    public function setIsAuditActive($isAuditActive)
    {
        $this->isAuditActive = $isAuditActive;
        return $this;
    }

    /**
     * Getter for auditIntervalSeconds
     *
     * @ElementName auditIntervalSeconds
     * @return int|null
     */
    public function getAuditIntervalSeconds()
    {
        return $this->auditIntervalSeconds;
    }

    /**
     * Setter for auditIntervalSeconds
     *
     * @ElementName auditIntervalSeconds
     * @param int|null $auditIntervalSeconds
     * @return $this
     */
    public function setAuditIntervalSeconds($auditIntervalSeconds)
    {
        $this->auditIntervalSeconds = $auditIntervalSeconds;
        return $this;
    }

    /**
     * Getter for auditTimeoutSeconds
     *
     * @ElementName auditTimeoutSeconds
     * @return int|null
     */
    public function getAuditTimeoutSeconds()
    {
        return $this->auditTimeoutSeconds;
    }

    /**
     * Setter for auditTimeoutSeconds
     *
     * @ElementName auditTimeoutSeconds
     * @param int|null $auditTimeoutSeconds
     * @return $this
     */
    public function setAuditTimeoutSeconds($auditTimeoutSeconds)
    {
        $this->auditTimeoutSeconds = $auditTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for releaseCallOnAuditFailure
     *
     * @ElementName releaseCallOnAuditFailure
     * @return bool|null
     */
    public function getReleaseCallOnAuditFailure()
    {
        return $this->releaseCallOnAuditFailure;
    }

    /**
     * Setter for releaseCallOnAuditFailure
     *
     * @ElementName releaseCallOnAuditFailure
     * @param bool|null $releaseCallOnAuditFailure
     * @return $this
     */
    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure)
    {
        $this->releaseCallOnAuditFailure = $releaseCallOnAuditFailure;
        return $this;
    }

    /**
     * Getter for isSIPRefreshAllowedOnAudit
     *
     * @ElementName isSIPRefreshAllowedOnAudit
     * @return bool|null
     */
    public function getIsSIPRefreshAllowedOnAudit()
    {
        return $this->isSIPRefreshAllowedOnAudit;
    }

    /**
     * Setter for isSIPRefreshAllowedOnAudit
     *
     * @ElementName isSIPRefreshAllowedOnAudit
     * @param bool|null $isSIPRefreshAllowedOnAudit
     * @return $this
     */
    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit)
    {
        $this->isSIPRefreshAllowedOnAudit = $isSIPRefreshAllowedOnAudit;
        return $this;
    }

    /**
     * Getter for allowUpdateForSIPRefresh
     *
     * @ElementName allowUpdateForSIPRefresh
     * @return bool|null
     */
    public function getAllowUpdateForSIPRefresh()
    {
        return $this->allowUpdateForSIPRefresh;
    }

    /**
     * Setter for allowUpdateForSIPRefresh
     *
     * @ElementName allowUpdateForSIPRefresh
     * @param bool|null $allowUpdateForSIPRefresh
     * @return $this
     */
    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh)
    {
        $this->allowUpdateForSIPRefresh = $allowUpdateForSIPRefresh;
        return $this;
    }

    /**
     * Getter for isSIPSessionTimerActive
     *
     * @ElementName isSIPSessionTimerActive
     * @return bool|null
     */
    public function getIsSIPSessionTimerActive()
    {
        return $this->isSIPSessionTimerActive;
    }

    /**
     * Setter for isSIPSessionTimerActive
     *
     * @ElementName isSIPSessionTimerActive
     * @param bool|null $isSIPSessionTimerActive
     * @return $this
     */
    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive)
    {
        $this->isSIPSessionTimerActive = $isSIPSessionTimerActive;
        return $this;
    }

    /**
     * Getter for sipSessionExpiresMinimumSeconds
     *
     * @ElementName sipSessionExpiresMinimumSeconds
     * @return int|null
     */
    public function getSipSessionExpiresMinimumSeconds()
    {
        return $this->sipSessionExpiresMinimumSeconds;
    }

    /**
     * Setter for sipSessionExpiresMinimumSeconds
     *
     * @ElementName sipSessionExpiresMinimumSeconds
     * @param int|null $sipSessionExpiresMinimumSeconds
     * @return $this
     */
    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds)
    {
        $this->sipSessionExpiresMinimumSeconds = $sipSessionExpiresMinimumSeconds;
        return $this;
    }

    /**
     * Getter for enforceSIPSessionExpiresMaximum
     *
     * @ElementName enforceSIPSessionExpiresMaximum
     * @return bool|null
     */
    public function getEnforceSIPSessionExpiresMaximum()
    {
        return $this->enforceSIPSessionExpiresMaximum;
    }

    /**
     * Setter for enforceSIPSessionExpiresMaximum
     *
     * @ElementName enforceSIPSessionExpiresMaximum
     * @param bool|null $enforceSIPSessionExpiresMaximum
     * @return $this
     */
    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum)
    {
        $this->enforceSIPSessionExpiresMaximum = $enforceSIPSessionExpiresMaximum;
        return $this;
    }

    /**
     * Getter for sipSessionExpiresMaximumSeconds
     *
     * @ElementName sipSessionExpiresMaximumSeconds
     * @return int|null
     */
    public function getSipSessionExpiresMaximumSeconds()
    {
        return $this->sipSessionExpiresMaximumSeconds;
    }

    /**
     * Setter for sipSessionExpiresMaximumSeconds
     *
     * @ElementName sipSessionExpiresMaximumSeconds
     * @param int|null $sipSessionExpiresMaximumSeconds
     * @return $this
     */
    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds)
    {
        $this->sipSessionExpiresMaximumSeconds = $sipSessionExpiresMaximumSeconds;
        return $this;
    }

    /**
     * Getter for sipSessionExpiresTimerSeconds
     *
     * @ElementName sipSessionExpiresTimerSeconds
     * @return int|null
     */
    public function getSipSessionExpiresTimerSeconds()
    {
        return $this->sipSessionExpiresTimerSeconds;
    }

    /**
     * Setter for sipSessionExpiresTimerSeconds
     *
     * @ElementName sipSessionExpiresTimerSeconds
     * @param int|null $sipSessionExpiresTimerSeconds
     * @return $this
     */
    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds)
    {
        $this->sipSessionExpiresTimerSeconds = $sipSessionExpiresTimerSeconds;
        return $this;
    }

    /**
     * Getter for alwaysUseSessionTimerWhenSupported
     *
     * @ElementName alwaysUseSessionTimerWhenSupported
     * @return bool|null
     */
    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return $this->alwaysUseSessionTimerWhenSupported;
    }

    /**
     * Setter for alwaysUseSessionTimerWhenSupported
     *
     * @ElementName alwaysUseSessionTimerWhenSupported
     * @param bool|null $alwaysUseSessionTimerWhenSupported
     * @return $this
     */
    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported)
    {
        $this->alwaysUseSessionTimerWhenSupported = $alwaysUseSessionTimerWhenSupported;
        return $this;
    }

    /**
     * Getter for preferredSessionTimerRefresher
     *
     * @ElementName preferredSessionTimerRefresher
     * @return string|null
     */
    public function getPreferredSessionTimerRefresher()
    {
        return $this->preferredSessionTimerRefresher;
    }

    /**
     * Setter for preferredSessionTimerRefresher
     *
     * @ElementName preferredSessionTimerRefresher
     * @param string|null $preferredSessionTimerRefresher
     * @return $this
     */
    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher)
    {
        $this->preferredSessionTimerRefresher = $preferredSessionTimerRefresher;
        return $this;
    }

    /**
     * Getter for enableEmergencyCallAlarmTimer
     *
     * @ElementName enableEmergencyCallAlarmTimer
     * @return bool|null
     */
    public function getEnableEmergencyCallAlarmTimer()
    {
        return $this->enableEmergencyCallAlarmTimer;
    }

    /**
     * Setter for enableEmergencyCallAlarmTimer
     *
     * @ElementName enableEmergencyCallAlarmTimer
     * @param bool|null $enableEmergencyCallAlarmTimer
     * @return $this
     */
    public function setEnableEmergencyCallAlarmTimer($enableEmergencyCallAlarmTimer)
    {
        $this->enableEmergencyCallAlarmTimer = $enableEmergencyCallAlarmTimer;
        return $this;
    }

    /**
     * Getter for emergencyCallAlarmMinutes
     *
     * @ElementName emergencyCallAlarmMinutes
     * @return int|null
     */
    public function getEmergencyCallAlarmMinutes()
    {
        return $this->emergencyCallAlarmMinutes;
    }

    /**
     * Setter for emergencyCallAlarmMinutes
     *
     * @ElementName emergencyCallAlarmMinutes
     * @param int|null $emergencyCallAlarmMinutes
     * @return $this
     */
    public function setEmergencyCallAlarmMinutes($emergencyCallAlarmMinutes)
    {
        $this->emergencyCallAlarmMinutes = $emergencyCallAlarmMinutes;
        return $this;
    }

    /**
     * Getter for enableEmergencyCallCleanupTimer
     *
     * @ElementName enableEmergencyCallCleanupTimer
     * @return bool|null
     */
    public function getEnableEmergencyCallCleanupTimer()
    {
        return $this->enableEmergencyCallCleanupTimer;
    }

    /**
     * Setter for enableEmergencyCallCleanupTimer
     *
     * @ElementName enableEmergencyCallCleanupTimer
     * @param bool|null $enableEmergencyCallCleanupTimer
     * @return $this
     */
    public function setEnableEmergencyCallCleanupTimer($enableEmergencyCallCleanupTimer)
    {
        $this->enableEmergencyCallCleanupTimer = $enableEmergencyCallCleanupTimer;
        return $this;
    }

    /**
     * Getter for emergencyCallCleanupMinutes
     *
     * @ElementName emergencyCallCleanupMinutes
     * @return int|null
     */
    public function getEmergencyCallCleanupMinutes()
    {
        return $this->emergencyCallCleanupMinutes;
    }

    /**
     * Setter for emergencyCallCleanupMinutes
     *
     * @ElementName emergencyCallCleanupMinutes
     * @param int|null $emergencyCallCleanupMinutes
     * @return $this
     */
    public function setEmergencyCallCleanupMinutes($emergencyCallCleanupMinutes)
    {
        $this->emergencyCallCleanupMinutes = $emergencyCallCleanupMinutes;
        return $this;
    }


}

