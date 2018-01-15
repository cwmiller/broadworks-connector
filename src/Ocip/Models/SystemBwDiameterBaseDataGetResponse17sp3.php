<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterBaseDataGetResponse17sp3
 *
 * Response to SystemBwDiameterBaseDataGetRequest17sp3.
 *         Contains a list of System Diameter base parameters.
 */
class SystemBwDiameterBaseDataGetResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName xsRealm
     * @var string|null
     */
    private $xsRealm = null;

    /**
     * @ElementName xsListeningPort
     * @var int|null
     */
    private $xsListeningPort = null;

    /**
     * @ElementName psRealm
     * @var string|null
     */
    private $psRealm = null;

    /**
     * @ElementName psListeningPort
     * @var int|null
     */
    private $psListeningPort = null;

    /**
     * @ElementName psRelayThroughXs
     * @var bool|null
     */
    private $psRelayThroughXs = null;

    /**
     * @ElementName xsRelayListeningPort
     * @var int|null
     */
    private $xsRelayListeningPort = null;

    /**
     * @ElementName tcTimerSeconds
     * @var int|null
     */
    private $tcTimerSeconds = null;

    /**
     * @ElementName twTimerSeconds
     * @var int|null
     */
    private $twTimerSeconds = null;

    /**
     * @ElementName requestTimerSeconds
     * @var int|null
     */
    private $requestTimerSeconds = null;

    /**
     * @ElementName busyPeerDetectionOutstandingTxnCount
     * @var int|null
     */
    private $busyPeerDetectionOutstandingTxnCount = null;

    /**
     * @ElementName busyPeerRestoreOutstandingTxnCount
     * @var int|null
     */
    private $busyPeerRestoreOutstandingTxnCount = null;

    /**
     * @ElementName dynamicEntryInactivityTimerHours
     * @var int|null
     */
    private $dynamicEntryInactivityTimerHours = null;

    /**
     * @ElementName advertisedOfflineBillingApplication
     * @var string|null
     */
    private $advertisedOfflineBillingApplication = null;

    /**
     * @ElementName advertisedOnlineBillingApplication
     * @var string|null
     */
    private $advertisedOnlineBillingApplication = null;

    /**
     * Getter for xsRealm
     *
     * @ElementName xsRealm
     * @return string|null
     */
    public function getXsRealm()
    {
        return $this->xsRealm;
    }

    /**
     * Setter for xsRealm
     *
     * @ElementName xsRealm
     * @param string|null $xsRealm
     * @return $this
     */
    public function setXsRealm($xsRealm)
    {
        $this->xsRealm = $xsRealm;
        return $this;
    }

    /**
     * Getter for xsListeningPort
     *
     * @ElementName xsListeningPort
     * @return int|null
     */
    public function getXsListeningPort()
    {
        return $this->xsListeningPort;
    }

    /**
     * Setter for xsListeningPort
     *
     * @ElementName xsListeningPort
     * @param int|null $xsListeningPort
     * @return $this
     */
    public function setXsListeningPort($xsListeningPort)
    {
        $this->xsListeningPort = $xsListeningPort;
        return $this;
    }

    /**
     * Getter for psRealm
     *
     * @ElementName psRealm
     * @return string|null
     */
    public function getPsRealm()
    {
        return $this->psRealm;
    }

    /**
     * Setter for psRealm
     *
     * @ElementName psRealm
     * @param string|null $psRealm
     * @return $this
     */
    public function setPsRealm($psRealm)
    {
        $this->psRealm = $psRealm;
        return $this;
    }

    /**
     * Getter for psListeningPort
     *
     * @ElementName psListeningPort
     * @return int|null
     */
    public function getPsListeningPort()
    {
        return $this->psListeningPort;
    }

    /**
     * Setter for psListeningPort
     *
     * @ElementName psListeningPort
     * @param int|null $psListeningPort
     * @return $this
     */
    public function setPsListeningPort($psListeningPort)
    {
        $this->psListeningPort = $psListeningPort;
        return $this;
    }

    /**
     * Getter for psRelayThroughXs
     *
     * @ElementName psRelayThroughXs
     * @return bool|null
     */
    public function getPsRelayThroughXs()
    {
        return $this->psRelayThroughXs;
    }

    /**
     * Setter for psRelayThroughXs
     *
     * @ElementName psRelayThroughXs
     * @param bool|null $psRelayThroughXs
     * @return $this
     */
    public function setPsRelayThroughXs($psRelayThroughXs)
    {
        $this->psRelayThroughXs = $psRelayThroughXs;
        return $this;
    }

    /**
     * Getter for xsRelayListeningPort
     *
     * @ElementName xsRelayListeningPort
     * @return int|null
     */
    public function getXsRelayListeningPort()
    {
        return $this->xsRelayListeningPort;
    }

    /**
     * Setter for xsRelayListeningPort
     *
     * @ElementName xsRelayListeningPort
     * @param int|null $xsRelayListeningPort
     * @return $this
     */
    public function setXsRelayListeningPort($xsRelayListeningPort)
    {
        $this->xsRelayListeningPort = $xsRelayListeningPort;
        return $this;
    }

    /**
     * Getter for tcTimerSeconds
     *
     * @ElementName tcTimerSeconds
     * @return int|null
     */
    public function getTcTimerSeconds()
    {
        return $this->tcTimerSeconds;
    }

    /**
     * Setter for tcTimerSeconds
     *
     * @ElementName tcTimerSeconds
     * @param int|null $tcTimerSeconds
     * @return $this
     */
    public function setTcTimerSeconds($tcTimerSeconds)
    {
        $this->tcTimerSeconds = $tcTimerSeconds;
        return $this;
    }

    /**
     * Getter for twTimerSeconds
     *
     * @ElementName twTimerSeconds
     * @return int|null
     */
    public function getTwTimerSeconds()
    {
        return $this->twTimerSeconds;
    }

    /**
     * Setter for twTimerSeconds
     *
     * @ElementName twTimerSeconds
     * @param int|null $twTimerSeconds
     * @return $this
     */
    public function setTwTimerSeconds($twTimerSeconds)
    {
        $this->twTimerSeconds = $twTimerSeconds;
        return $this;
    }

    /**
     * Getter for requestTimerSeconds
     *
     * @ElementName requestTimerSeconds
     * @return int|null
     */
    public function getRequestTimerSeconds()
    {
        return $this->requestTimerSeconds;
    }

    /**
     * Setter for requestTimerSeconds
     *
     * @ElementName requestTimerSeconds
     * @param int|null $requestTimerSeconds
     * @return $this
     */
    public function setRequestTimerSeconds($requestTimerSeconds)
    {
        $this->requestTimerSeconds = $requestTimerSeconds;
        return $this;
    }

    /**
     * Getter for busyPeerDetectionOutstandingTxnCount
     *
     * @ElementName busyPeerDetectionOutstandingTxnCount
     * @return int|null
     */
    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return $this->busyPeerDetectionOutstandingTxnCount;
    }

    /**
     * Setter for busyPeerDetectionOutstandingTxnCount
     *
     * @ElementName busyPeerDetectionOutstandingTxnCount
     * @param int|null $busyPeerDetectionOutstandingTxnCount
     * @return $this
     */
    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount)
    {
        $this->busyPeerDetectionOutstandingTxnCount = $busyPeerDetectionOutstandingTxnCount;
        return $this;
    }

    /**
     * Getter for busyPeerRestoreOutstandingTxnCount
     *
     * @ElementName busyPeerRestoreOutstandingTxnCount
     * @return int|null
     */
    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return $this->busyPeerRestoreOutstandingTxnCount;
    }

    /**
     * Setter for busyPeerRestoreOutstandingTxnCount
     *
     * @ElementName busyPeerRestoreOutstandingTxnCount
     * @param int|null $busyPeerRestoreOutstandingTxnCount
     * @return $this
     */
    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount)
    {
        $this->busyPeerRestoreOutstandingTxnCount = $busyPeerRestoreOutstandingTxnCount;
        return $this;
    }

    /**
     * Getter for dynamicEntryInactivityTimerHours
     *
     * @ElementName dynamicEntryInactivityTimerHours
     * @return int|null
     */
    public function getDynamicEntryInactivityTimerHours()
    {
        return $this->dynamicEntryInactivityTimerHours;
    }

    /**
     * Setter for dynamicEntryInactivityTimerHours
     *
     * @ElementName dynamicEntryInactivityTimerHours
     * @param int|null $dynamicEntryInactivityTimerHours
     * @return $this
     */
    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours)
    {
        $this->dynamicEntryInactivityTimerHours = $dynamicEntryInactivityTimerHours;
        return $this;
    }

    /**
     * Getter for advertisedOfflineBillingApplication
     *
     * @ElementName advertisedOfflineBillingApplication
     * @return string|null
     */
    public function getAdvertisedOfflineBillingApplication()
    {
        return $this->advertisedOfflineBillingApplication;
    }

    /**
     * Setter for advertisedOfflineBillingApplication
     *
     * @ElementName advertisedOfflineBillingApplication
     * @param string|null $advertisedOfflineBillingApplication
     * @return $this
     */
    public function setAdvertisedOfflineBillingApplication($advertisedOfflineBillingApplication)
    {
        $this->advertisedOfflineBillingApplication = $advertisedOfflineBillingApplication;
        return $this;
    }

    /**
     * Getter for advertisedOnlineBillingApplication
     *
     * @ElementName advertisedOnlineBillingApplication
     * @return string|null
     */
    public function getAdvertisedOnlineBillingApplication()
    {
        return $this->advertisedOnlineBillingApplication;
    }

    /**
     * Setter for advertisedOnlineBillingApplication
     *
     * @ElementName advertisedOnlineBillingApplication
     * @param string|null $advertisedOnlineBillingApplication
     * @return $this
     */
    public function setAdvertisedOnlineBillingApplication($advertisedOnlineBillingApplication)
    {
        $this->advertisedOnlineBillingApplication = $advertisedOnlineBillingApplication;
        return $this;
    }


}

