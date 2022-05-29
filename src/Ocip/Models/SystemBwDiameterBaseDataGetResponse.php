<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterBaseDataGetResponse
 *
 * Response to SystemBwDiameterBaseDataGetRequest.
 *         Contains a list of System Diameter base parameters.
 *
 * @see SystemBwDiameterBaseDataGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20618","type":"sequence"}]
 */
class SystemBwDiameterBaseDataGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName xsRealm
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $xsRealm = null;

    /**
     * @ElementName xsListeningPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $xsListeningPort = null;

    /**
     * @ElementName psRealm
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $psRealm = null;

    /**
     * @ElementName psListeningPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $psListeningPort = null;

    /**
     * @ElementName psRelayThroughXs
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @var bool|null
     */
    protected $psRelayThroughXs = null;

    /**
     * @ElementName xsRelayListeningPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $xsRelayListeningPort = null;

    /**
     * @ElementName tcTimerSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1
     * @MaxInclusive 3600
     * @var int|null
     */
    protected $tcTimerSeconds = null;

    /**
     * @ElementName twTimerSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 6
     * @MaxInclusive 60
     * @var int|null
     */
    protected $twTimerSeconds = null;

    /**
     * @ElementName requestTimerSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1
     * @MaxInclusive 600
     * @var int|null
     */
    protected $requestTimerSeconds = null;

    /**
     * @ElementName busyPeerDetectionOutstandingTxnCount
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1
     * @MaxInclusive 1000000
     * @var int|null
     */
    protected $busyPeerDetectionOutstandingTxnCount = null;

    /**
     * @ElementName busyPeerRestoreOutstandingTxnCount
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1
     * @MaxInclusive 1000000
     * @var int|null
     */
    protected $busyPeerRestoreOutstandingTxnCount = null;

    /**
     * @ElementName dynamicEntryInactivityTimerHours
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20618
     * @MinInclusive 1
     * @MaxInclusive 168
     * @var int|null
     */
    protected $dynamicEntryInactivityTimerHours = null;

    /**
     * Getter for xsRealm
     *
     * @return string
     */
    public function getXsRealm()
    {
        return $this->xsRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsRealm;
    }

    /**
     * Setter for xsRealm
     *
     * @param string $xsRealm
     * @return $this
     */
    public function setXsRealm($xsRealm)
    {
        $this->xsRealm = $xsRealm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsRealm()
    {
        $this->xsRealm = null;
        return $this;
    }

    /**
     * Getter for xsListeningPort
     *
     * @return int
     */
    public function getXsListeningPort()
    {
        return $this->xsListeningPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsListeningPort;
    }

    /**
     * Setter for xsListeningPort
     *
     * @param int $xsListeningPort
     * @return $this
     */
    public function setXsListeningPort($xsListeningPort)
    {
        $this->xsListeningPort = $xsListeningPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsListeningPort()
    {
        $this->xsListeningPort = null;
        return $this;
    }

    /**
     * Getter for psRealm
     *
     * @return string
     */
    public function getPsRealm()
    {
        return $this->psRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psRealm;
    }

    /**
     * Setter for psRealm
     *
     * @param string $psRealm
     * @return $this
     */
    public function setPsRealm($psRealm)
    {
        $this->psRealm = $psRealm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPsRealm()
    {
        $this->psRealm = null;
        return $this;
    }

    /**
     * Getter for psListeningPort
     *
     * @return int
     */
    public function getPsListeningPort()
    {
        return $this->psListeningPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psListeningPort;
    }

    /**
     * Setter for psListeningPort
     *
     * @param int $psListeningPort
     * @return $this
     */
    public function setPsListeningPort($psListeningPort)
    {
        $this->psListeningPort = $psListeningPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPsListeningPort()
    {
        $this->psListeningPort = null;
        return $this;
    }

    /**
     * Getter for psRelayThroughXs
     *
     * @return bool
     */
    public function getPsRelayThroughXs()
    {
        return $this->psRelayThroughXs instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psRelayThroughXs;
    }

    /**
     * Setter for psRelayThroughXs
     *
     * @param bool $psRelayThroughXs
     * @return $this
     */
    public function setPsRelayThroughXs($psRelayThroughXs)
    {
        $this->psRelayThroughXs = $psRelayThroughXs;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPsRelayThroughXs()
    {
        $this->psRelayThroughXs = null;
        return $this;
    }

    /**
     * Getter for xsRelayListeningPort
     *
     * @return int
     */
    public function getXsRelayListeningPort()
    {
        return $this->xsRelayListeningPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsRelayListeningPort;
    }

    /**
     * Setter for xsRelayListeningPort
     *
     * @param int $xsRelayListeningPort
     * @return $this
     */
    public function setXsRelayListeningPort($xsRelayListeningPort)
    {
        $this->xsRelayListeningPort = $xsRelayListeningPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsRelayListeningPort()
    {
        $this->xsRelayListeningPort = null;
        return $this;
    }

    /**
     * Getter for tcTimerSeconds
     *
     * @return int
     */
    public function getTcTimerSeconds()
    {
        return $this->tcTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tcTimerSeconds;
    }

    /**
     * Setter for tcTimerSeconds
     *
     * @param int $tcTimerSeconds
     * @return $this
     */
    public function setTcTimerSeconds($tcTimerSeconds)
    {
        $this->tcTimerSeconds = $tcTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTcTimerSeconds()
    {
        $this->tcTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for twTimerSeconds
     *
     * @return int
     */
    public function getTwTimerSeconds()
    {
        return $this->twTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->twTimerSeconds;
    }

    /**
     * Setter for twTimerSeconds
     *
     * @param int $twTimerSeconds
     * @return $this
     */
    public function setTwTimerSeconds($twTimerSeconds)
    {
        $this->twTimerSeconds = $twTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTwTimerSeconds()
    {
        $this->twTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for requestTimerSeconds
     *
     * @return int
     */
    public function getRequestTimerSeconds()
    {
        return $this->requestTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requestTimerSeconds;
    }

    /**
     * Setter for requestTimerSeconds
     *
     * @param int $requestTimerSeconds
     * @return $this
     */
    public function setRequestTimerSeconds($requestTimerSeconds)
    {
        $this->requestTimerSeconds = $requestTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequestTimerSeconds()
    {
        $this->requestTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for busyPeerDetectionOutstandingTxnCount
     *
     * @return int
     */
    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return $this->busyPeerDetectionOutstandingTxnCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPeerDetectionOutstandingTxnCount;
    }

    /**
     * Setter for busyPeerDetectionOutstandingTxnCount
     *
     * @param int $busyPeerDetectionOutstandingTxnCount
     * @return $this
     */
    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount)
    {
        $this->busyPeerDetectionOutstandingTxnCount = $busyPeerDetectionOutstandingTxnCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPeerDetectionOutstandingTxnCount()
    {
        $this->busyPeerDetectionOutstandingTxnCount = null;
        return $this;
    }

    /**
     * Getter for busyPeerRestoreOutstandingTxnCount
     *
     * @return int
     */
    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return $this->busyPeerRestoreOutstandingTxnCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPeerRestoreOutstandingTxnCount;
    }

    /**
     * Setter for busyPeerRestoreOutstandingTxnCount
     *
     * @param int $busyPeerRestoreOutstandingTxnCount
     * @return $this
     */
    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount)
    {
        $this->busyPeerRestoreOutstandingTxnCount = $busyPeerRestoreOutstandingTxnCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPeerRestoreOutstandingTxnCount()
    {
        $this->busyPeerRestoreOutstandingTxnCount = null;
        return $this;
    }

    /**
     * Getter for dynamicEntryInactivityTimerHours
     *
     * @return int
     */
    public function getDynamicEntryInactivityTimerHours()
    {
        return $this->dynamicEntryInactivityTimerHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dynamicEntryInactivityTimerHours;
    }

    /**
     * Setter for dynamicEntryInactivityTimerHours
     *
     * @param int $dynamicEntryInactivityTimerHours
     * @return $this
     */
    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours)
    {
        $this->dynamicEntryInactivityTimerHours = $dynamicEntryInactivityTimerHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDynamicEntryInactivityTimerHours()
    {
        $this->dynamicEntryInactivityTimerHours = null;
        return $this;
    }


}

