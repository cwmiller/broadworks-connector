<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAuditGetResponse14sp3
 *
 * Response to SystemSessionAuditGetRequest14sp3.
 *
 * @see SystemSessionAuditGetRequest14sp3
 */
class SystemSessionAuditGetResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

