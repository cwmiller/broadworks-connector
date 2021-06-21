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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2671","type":"sequence"}]
 */
class SystemBwDiameterBaseDataModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName xsRealm
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $xsRealm = null;

    /**
     * @ElementName xsListeningPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $xsListeningPort = null;

    /**
     * @ElementName xsListeningPortEnabled
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var bool|null
     */
    private $xsListeningPortEnabled = null;

    /**
     * @ElementName xsListeningSecurePort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $xsListeningSecurePort = null;

    /**
     * @ElementName xsListeningSecurePortEnabled
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var bool|null
     */
    private $xsListeningSecurePortEnabled = null;

    /**
     * @ElementName psRealm
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $psRealm = null;

    /**
     * @ElementName psListeningPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $psListeningPort = null;

    /**
     * @ElementName psListeningPortEnabled
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var bool|null
     */
    private $psListeningPortEnabled = null;

    /**
     * @ElementName psListeningSecurePort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $psListeningSecurePort = null;

    /**
     * @ElementName psListeningSecurePortEnabled
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var bool|null
     */
    private $psListeningSecurePortEnabled = null;

    /**
     * @ElementName psRelayThroughXs
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var bool|null
     */
    private $psRelayThroughXs = null;

    /**
     * @ElementName xsRelayListeningPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $xsRelayListeningPort = null;

    /**
     * @ElementName tcTimerSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1
     * @MaxInclusive 3600
     * @var int|null
     */
    private $tcTimerSeconds = null;

    /**
     * @ElementName twTimerSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 6
     * @MaxInclusive 60
     * @var int|null
     */
    private $twTimerSeconds = null;

    /**
     * @ElementName requestTimerSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1
     * @MaxInclusive 600
     * @var int|null
     */
    private $requestTimerSeconds = null;

    /**
     * @ElementName busyPeerDetectionOutstandingTxnCount
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1
     * @MaxInclusive 1000000
     * @var int|null
     */
    private $busyPeerDetectionOutstandingTxnCount = null;

    /**
     * @ElementName busyPeerRestoreOutstandingTxnCount
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1
     * @MaxInclusive 1000000
     * @var int|null
     */
    private $busyPeerRestoreOutstandingTxnCount = null;

    /**
     * @ElementName dynamicEntryInactivityTimerHours
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1
     * @MaxInclusive 168
     * @var int|null
     */
    private $dynamicEntryInactivityTimerHours = null;

    /**
     * @ElementName advertisedOfflineBillingApplication
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication|null
     */
    private $advertisedOfflineBillingApplication = null;

    /**
     * @ElementName advertisedOnlineBillingApplication
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterAdvertisedApplication|null
     */
    private $advertisedOnlineBillingApplication = null;

    /**
     * @ElementName defaultPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $defaultPort = null;

    /**
     * @ElementName defaultSecurePort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $defaultSecurePort = null;

    /**
     * @ElementName peerDiscoveryMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DiameterPeerDiscoveryMode
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2671
     * @var \CWM\BroadWorksConnector\Ocip\Models\DiameterPeerDiscoveryMode|null
     */
    private $peerDiscoveryMode = null;

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
    public function setXsRealm($xsRealm = null)
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
     * Getter for xsListeningPortEnabled
     *
     * @return bool
     */
    public function getXsListeningPortEnabled()
    {
        return $this->xsListeningPortEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsListeningPortEnabled;
    }

    /**
     * Setter for xsListeningPortEnabled
     *
     * @param bool $xsListeningPortEnabled
     * @return $this
     */
    public function setXsListeningPortEnabled($xsListeningPortEnabled)
    {
        $this->xsListeningPortEnabled = $xsListeningPortEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsListeningPortEnabled()
    {
        $this->xsListeningPortEnabled = null;
        return $this;
    }

    /**
     * Getter for xsListeningSecurePort
     *
     * @return int
     */
    public function getXsListeningSecurePort()
    {
        return $this->xsListeningSecurePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsListeningSecurePort;
    }

    /**
     * Setter for xsListeningSecurePort
     *
     * @param int $xsListeningSecurePort
     * @return $this
     */
    public function setXsListeningSecurePort($xsListeningSecurePort)
    {
        $this->xsListeningSecurePort = $xsListeningSecurePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsListeningSecurePort()
    {
        $this->xsListeningSecurePort = null;
        return $this;
    }

    /**
     * Getter for xsListeningSecurePortEnabled
     *
     * @return bool
     */
    public function getXsListeningSecurePortEnabled()
    {
        return $this->xsListeningSecurePortEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsListeningSecurePortEnabled;
    }

    /**
     * Setter for xsListeningSecurePortEnabled
     *
     * @param bool $xsListeningSecurePortEnabled
     * @return $this
     */
    public function setXsListeningSecurePortEnabled($xsListeningSecurePortEnabled)
    {
        $this->xsListeningSecurePortEnabled = $xsListeningSecurePortEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsListeningSecurePortEnabled()
    {
        $this->xsListeningSecurePortEnabled = null;
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
    public function setPsRealm($psRealm = null)
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
     * Getter for psListeningPortEnabled
     *
     * @return bool
     */
    public function getPsListeningPortEnabled()
    {
        return $this->psListeningPortEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psListeningPortEnabled;
    }

    /**
     * Setter for psListeningPortEnabled
     *
     * @param bool $psListeningPortEnabled
     * @return $this
     */
    public function setPsListeningPortEnabled($psListeningPortEnabled)
    {
        $this->psListeningPortEnabled = $psListeningPortEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPsListeningPortEnabled()
    {
        $this->psListeningPortEnabled = null;
        return $this;
    }

    /**
     * Getter for psListeningSecurePort
     *
     * @return int
     */
    public function getPsListeningSecurePort()
    {
        return $this->psListeningSecurePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psListeningSecurePort;
    }

    /**
     * Setter for psListeningSecurePort
     *
     * @param int $psListeningSecurePort
     * @return $this
     */
    public function setPsListeningSecurePort($psListeningSecurePort)
    {
        $this->psListeningSecurePort = $psListeningSecurePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPsListeningSecurePort()
    {
        $this->psListeningSecurePort = null;
        return $this;
    }

    /**
     * Getter for psListeningSecurePortEnabled
     *
     * @return bool
     */
    public function getPsListeningSecurePortEnabled()
    {
        return $this->psListeningSecurePortEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->psListeningSecurePortEnabled;
    }

    /**
     * Setter for psListeningSecurePortEnabled
     *
     * @param bool $psListeningSecurePortEnabled
     * @return $this
     */
    public function setPsListeningSecurePortEnabled($psListeningSecurePortEnabled)
    {
        $this->psListeningSecurePortEnabled = $psListeningSecurePortEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPsListeningSecurePortEnabled()
    {
        $this->psListeningSecurePortEnabled = null;
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

    /**
     * Getter for defaultPort
     *
     * @return int
     */
    public function getDefaultPort()
    {
        return $this->defaultPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPort;
    }

    /**
     * Setter for defaultPort
     *
     * @param int $defaultPort
     * @return $this
     */
    public function setDefaultPort($defaultPort)
    {
        $this->defaultPort = $defaultPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultPort()
    {
        $this->defaultPort = null;
        return $this;
    }

    /**
     * Getter for defaultSecurePort
     *
     * @return int
     */
    public function getDefaultSecurePort()
    {
        return $this->defaultSecurePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSecurePort;
    }

    /**
     * Setter for defaultSecurePort
     *
     * @param int $defaultSecurePort
     * @return $this
     */
    public function setDefaultSecurePort($defaultSecurePort)
    {
        $this->defaultSecurePort = $defaultSecurePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSecurePort()
    {
        $this->defaultSecurePort = null;
        return $this;
    }

    /**
     * Getter for peerDiscoveryMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DiameterPeerDiscoveryMode
     */
    public function getPeerDiscoveryMode()
    {
        return $this->peerDiscoveryMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->peerDiscoveryMode;
    }

    /**
     * Setter for peerDiscoveryMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DiameterPeerDiscoveryMode $peerDiscoveryMode
     * @return $this
     */
    public function setPeerDiscoveryMode(\CWM\BroadWorksConnector\Ocip\Models\DiameterPeerDiscoveryMode $peerDiscoveryMode)
    {
        $this->peerDiscoveryMode = $peerDiscoveryMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPeerDiscoveryMode()
    {
        $this->peerDiscoveryMode = null;
        return $this;
    }


}

