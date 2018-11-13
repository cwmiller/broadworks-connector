<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterBaseDataModifyRequest
 *
 * Modifies the System Diameter base parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBwDiameterBaseDataModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsRealm
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $xsRealm = null;

    /**
     * @ElementName xsListeningPort
     * @Type int
     * @var int|null
     */
    private $xsListeningPort = null;

    /**
     * @ElementName psRealm
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $psRealm = null;

    /**
     * @ElementName psListeningPort
     * @Type int
     * @var int|null
     */
    private $psListeningPort = null;

    /**
     * @ElementName psRelayThroughXs
     * @Type bool
     * @var bool|null
     */
    private $psRelayThroughXs = null;

    /**
     * @ElementName xsRelayListeningPort
     * @Type int
     * @var int|null
     */
    private $xsRelayListeningPort = null;

    /**
     * @ElementName tcTimerSeconds
     * @Type int
     * @var int|null
     */
    private $tcTimerSeconds = null;

    /**
     * @ElementName twTimerSeconds
     * @Type int
     * @var int|null
     */
    private $twTimerSeconds = null;

    /**
     * @ElementName requestTimerSeconds
     * @Type int
     * @var int|null
     */
    private $requestTimerSeconds = null;

    /**
     * @ElementName busyPeerDetectionOutstandingTxnCount
     * @Type int
     * @var int|null
     */
    private $busyPeerDetectionOutstandingTxnCount = null;

    /**
     * @ElementName busyPeerRestoreOutstandingTxnCount
     * @Type int
     * @var int|null
     */
    private $busyPeerRestoreOutstandingTxnCount = null;

    /**
     * @ElementName dynamicEntryInactivityTimerHours
     * @Type int
     * @var int|null
     */
    private $dynamicEntryInactivityTimerHours = null;

    /**
     * @ElementName advertisedOfflineBillingApplication
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication|null
     */
    private $advertisedOfflineBillingApplication = null;

    /**
     * @ElementName advertisedOnlineBillingApplication
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication|null
     */
    private $advertisedOnlineBillingApplication = null;

    /**
     * Getter for xsRealm
     *
     * @return string|null
     */
    public function getXsRealm()
    {
        return $this->xsRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsRealm;
    }

    /**
     * Setter for xsRealm
     *
     * @param string|null $xsRealm
     * @return $this
     */
    public function setXsRealm($xsRealm)
    {
        if ($xsRealm === null) {
            $this->xsRealm = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->xsRealm = $xsRealm;
        }
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
     * @return string|null
     */
    public function getPsRealm()
    {
        return $this->psRealm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psRealm;
    }

    /**
     * Setter for psRealm
     *
     * @param string|null $psRealm
     * @return $this
     */
    public function setPsRealm($psRealm)
    {
        if ($psRealm === null) {
            $this->psRealm = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->psRealm = $psRealm;
        }
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

    /**
     * Getter for advertisedOfflineBillingApplication
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication
     */
    public function getAdvertisedOfflineBillingApplication()
    {
        return $this->advertisedOfflineBillingApplication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->advertisedOfflineBillingApplication;
    }

    /**
     * Setter for advertisedOfflineBillingApplication
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication $advertisedOfflineBillingApplication
     * @return $this
     */
    public function setAdvertisedOfflineBillingApplication(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication $advertisedOfflineBillingApplication)
    {
        $this->advertisedOfflineBillingApplication = $advertisedOfflineBillingApplication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdvertisedOfflineBillingApplication()
    {
        $this->advertisedOfflineBillingApplication = null;
        return $this;
    }

    /**
     * Getter for advertisedOnlineBillingApplication
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication
     */
    public function getAdvertisedOnlineBillingApplication()
    {
        return $this->advertisedOnlineBillingApplication instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->advertisedOnlineBillingApplication;
    }

    /**
     * Setter for advertisedOnlineBillingApplication
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication $advertisedOnlineBillingApplication
     * @return $this
     */
    public function setAdvertisedOnlineBillingApplication(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication $advertisedOnlineBillingApplication)
    {
        $this->advertisedOnlineBillingApplication = $advertisedOnlineBillingApplication;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdvertisedOnlineBillingApplication()
    {
        $this->advertisedOnlineBillingApplication = null;
        return $this;
    }


}

