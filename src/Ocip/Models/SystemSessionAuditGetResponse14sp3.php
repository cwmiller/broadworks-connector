<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAuditGetResponse14sp3
 *
 * Response to SystemSessionAuditGetRequest14sp3.
 *
 * @see SystemSessionAuditGetRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:29298","type":"sequence"}]
 */
class SystemSessionAuditGetResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isAuditActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $isAuditActive = null;

    /**
     * @ElementName auditIntervalSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @MinInclusive 60
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $auditIntervalSeconds = null;

    /**
     * @ElementName auditTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @MinInclusive 60
     * @MaxInclusive 600
     * @var int|null
     */
    protected $auditTimeoutSeconds = null;

    /**
     * @ElementName releaseCallOnAuditFailure
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $releaseCallOnAuditFailure = null;

    /**
     * @ElementName isSIPRefreshAllowedOnAudit
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $isSIPRefreshAllowedOnAudit = null;

    /**
     * @ElementName allowUpdateForSIPRefresh
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $allowUpdateForSIPRefresh = null;

    /**
     * @ElementName isSIPSessionTimerActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $isSIPSessionTimerActive = null;

    /**
     * @ElementName sipSessionExpiresMinimumSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @MinInclusive 30
     * @MaxInclusive 3600
     * @var int|null
     */
    protected $sipSessionExpiresMinimumSeconds = null;

    /**
     * @ElementName enforceSIPSessionExpiresMaximum
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $enforceSIPSessionExpiresMaximum = null;

    /**
     * @ElementName sipSessionExpiresMaximumSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @MinInclusive 3600
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $sipSessionExpiresMaximumSeconds = null;

    /**
     * @ElementName sipSessionExpiresTimerSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $sipSessionExpiresTimerSeconds = null;

    /**
     * @ElementName alwaysUseSessionTimerWhenSupported
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var bool|null
     */
    protected $alwaysUseSessionTimerWhenSupported = null;

    /**
     * @ElementName preferredSessionTimerRefresher
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29298
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionTimerRefresher|null
     */
    protected $preferredSessionTimerRefresher = null;

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


}

