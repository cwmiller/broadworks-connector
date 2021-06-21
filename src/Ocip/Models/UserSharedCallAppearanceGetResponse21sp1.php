<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetResponse21sp1
 *
 * Response to the UserSharedCallAppearanceGetRequest21sp1.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact", "Port Number", "Device Support Visual Device Management", "Is Active", "Allow Origination", "Allow Termination", "Mac Address", "Path Header".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         The "SIP Contact" column does not contain "sip:" in 21sp1.
 *         Port numbers are only used by devices with static line ordering.
 *
 * @see UserSharedCallAppearanceGetRequest21sp1
 * @Groups [{"id":"524e0d071a229a44af2f953d6b50db35:154","type":"sequence"}]
 */
class UserSharedCallAppearanceGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $alertAllAppearancesForGroupPagingCalls = null;

    /**
     * @ElementName maxAppearances
     * @Type int
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var int|null
     */
    private $maxAppearances = null;

    /**
     * @ElementName allowSCACallRetrieve
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $allowSCACallRetrieve = null;

    /**
     * @ElementName enableMultipleCallArrangement
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $enableMultipleCallArrangement = null;

    /**
     * @ElementName multipleCallArrangementIsActive
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $multipleCallArrangementIsActive = null;

    /**
     * @ElementName endpointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $endpointTable = null;

    /**
     * @ElementName allowBridgingBetweenLocations
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $allowBridgingBetweenLocations = null;

    /**
     * @ElementName bridgeWarningTone
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone|null
     */
    private $bridgeWarningTone = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @Group 524e0d071a229a44af2f953d6b50db35:154
     * @var bool|null
     */
    private $enableCallParkNotification = null;

    /**
     * Getter for alertAllAppearancesForClickToDialCalls
     *
     * @return bool
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return $this->alertAllAppearancesForClickToDialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAllAppearancesForClickToDialCalls;
    }

    /**
     * Setter for alertAllAppearancesForClickToDialCalls
     *
     * @param bool $alertAllAppearancesForClickToDialCalls
     * @return $this
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls)
    {
        $this->alertAllAppearancesForClickToDialCalls = $alertAllAppearancesForClickToDialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAllAppearancesForClickToDialCalls()
    {
        $this->alertAllAppearancesForClickToDialCalls = null;
        return $this;
    }

    /**
     * Getter for alertAllAppearancesForGroupPagingCalls
     *
     * @return bool
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return $this->alertAllAppearancesForGroupPagingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAllAppearancesForGroupPagingCalls;
    }

    /**
     * Setter for alertAllAppearancesForGroupPagingCalls
     *
     * @param bool $alertAllAppearancesForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls)
    {
        $this->alertAllAppearancesForGroupPagingCalls = $alertAllAppearancesForGroupPagingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAllAppearancesForGroupPagingCalls()
    {
        $this->alertAllAppearancesForGroupPagingCalls = null;
        return $this;
    }

    /**
     * Getter for maxAppearances
     *
     * @return int
     */
    public function getMaxAppearances()
    {
        return $this->maxAppearances instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAppearances;
    }

    /**
     * Setter for maxAppearances
     *
     * @param int $maxAppearances
     * @return $this
     */
    public function setMaxAppearances($maxAppearances)
    {
        $this->maxAppearances = $maxAppearances;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAppearances()
    {
        $this->maxAppearances = null;
        return $this;
    }

    /**
     * Getter for allowSCACallRetrieve
     *
     * @return bool
     */
    public function getAllowSCACallRetrieve()
    {
        return $this->allowSCACallRetrieve instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowSCACallRetrieve;
    }

    /**
     * Setter for allowSCACallRetrieve
     *
     * @param bool $allowSCACallRetrieve
     * @return $this
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve)
    {
        $this->allowSCACallRetrieve = $allowSCACallRetrieve;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowSCACallRetrieve()
    {
        $this->allowSCACallRetrieve = null;
        return $this;
    }

    /**
     * Getter for enableMultipleCallArrangement
     *
     * @return bool
     */
    public function getEnableMultipleCallArrangement()
    {
        return $this->enableMultipleCallArrangement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMultipleCallArrangement;
    }

    /**
     * Setter for enableMultipleCallArrangement
     *
     * @param bool $enableMultipleCallArrangement
     * @return $this
     */
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement)
    {
        $this->enableMultipleCallArrangement = $enableMultipleCallArrangement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMultipleCallArrangement()
    {
        $this->enableMultipleCallArrangement = null;
        return $this;
    }

    /**
     * Getter for multipleCallArrangementIsActive
     *
     * @return bool
     */
    public function getMultipleCallArrangementIsActive()
    {
        return $this->multipleCallArrangementIsActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->multipleCallArrangementIsActive;
    }

    /**
     * Setter for multipleCallArrangementIsActive
     *
     * @param bool $multipleCallArrangementIsActive
     * @return $this
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive)
    {
        $this->multipleCallArrangementIsActive = $multipleCallArrangementIsActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMultipleCallArrangementIsActive()
    {
        $this->multipleCallArrangementIsActive = null;
        return $this;
    }

    /**
     * Getter for endpointTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getEndpointTable()
    {
        return $this->endpointTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointTable;
    }

    /**
     * Setter for endpointTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $endpointTable
     * @return $this
     */
    public function setEndpointTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $endpointTable)
    {
        $this->endpointTable = $endpointTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointTable()
    {
        $this->endpointTable = null;
        return $this;
    }

    /**
     * Getter for allowBridgingBetweenLocations
     *
     * @return bool
     */
    public function getAllowBridgingBetweenLocations()
    {
        return $this->allowBridgingBetweenLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowBridgingBetweenLocations;
    }

    /**
     * Setter for allowBridgingBetweenLocations
     *
     * @param bool $allowBridgingBetweenLocations
     * @return $this
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations)
    {
        $this->allowBridgingBetweenLocations = $allowBridgingBetweenLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowBridgingBetweenLocations()
    {
        $this->allowBridgingBetweenLocations = null;
        return $this;
    }

    /**
     * Getter for bridgeWarningTone
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone
     */
    public function getBridgeWarningTone()
    {
        return $this->bridgeWarningTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bridgeWarningTone;
    }

    /**
     * Setter for bridgeWarningTone
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone $bridgeWarningTone
     * @return $this
     */
    public function setBridgeWarningTone(\CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone $bridgeWarningTone)
    {
        $this->bridgeWarningTone = $bridgeWarningTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBridgeWarningTone()
    {
        $this->bridgeWarningTone = null;
        return $this;
    }

    /**
     * Getter for enableCallParkNotification
     *
     * @return bool
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @param bool $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallParkNotification()
    {
        $this->enableCallParkNotification = null;
        return $this;
    }


}

