<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSharedCallAppearanceInfo
 *
 * This is the configuration parameters for shared call appearance service
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP
 * Contact", "Port Number". "Private Identity" .        
 *           
 *         The "Device Level" column contains one of the AccessDeviceLevel
 * enumerated constants.
 *         Port numbers are only used by devices with static line ordering.
 */
class ProfileAndServiceSharedCallAppearanceInfo
{

    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @var bool|null
     */
    private $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @var bool|null
     */
    private $alertAllAppearancesForGroupPagingCalls = null;

    /**
     * @ElementName maxAppearances
     * @var int|null
     */
    private $maxAppearances = null;

    /**
     * @ElementName allowSCACallRetrieve
     * @var bool|null
     */
    private $allowSCACallRetrieve = null;

    /**
     * @ElementName enableMultipleCallArrangement
     * @var bool|null
     */
    private $enableMultipleCallArrangement = null;

    /**
     * @ElementName multipleCallArrangementIsActive
     * @var bool|null
     */
    private $multipleCallArrangementIsActive = null;

    /**
     * @ElementName endpointTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $endpointTable = null;

    /**
     * @ElementName allowBridgingBetweenLocations
     * @var bool|null
     */
    private $allowBridgingBetweenLocations = null;

    /**
     * @ElementName bridgeWarningTone
     * @var string|null
     */
    private $bridgeWarningTone = null;

    /**
     * @ElementName enableCallParkNotification
     * @var bool|null
     */
    private $enableCallParkNotification = null;

    /**
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @var bool|null
     */
    private $useUserPrimaryWithAlternateCallsSetting = null;

    /**
     * @ElementName allowSimultaneousPrimaryAndAlternate
     * @var bool|null
     */
    private $allowSimultaneousPrimaryAndAlternate = null;

    /**
     * @ElementName restrictCallRetrieveOfPrimary
     * @var bool|null
     */
    private $restrictCallRetrieveOfPrimary = null;

    /**
     * @ElementName restrictCallBridgingOfPrimary
     * @var bool|null
     */
    private $restrictCallBridgingOfPrimary = null;

    /**
     * Getter for alertAllAppearancesForClickToDialCalls
     *
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @return bool|null
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return $this->alertAllAppearancesForClickToDialCalls;
    }

    /**
     * Setter for alertAllAppearancesForClickToDialCalls
     *
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @param bool|null $alertAllAppearancesForClickToDialCalls
     * @return $this
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls)
    {
        $this->alertAllAppearancesForClickToDialCalls = $alertAllAppearancesForClickToDialCalls;
        return $this;
    }

    /**
     * Getter for alertAllAppearancesForGroupPagingCalls
     *
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @return bool|null
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return $this->alertAllAppearancesForGroupPagingCalls;
    }

    /**
     * Setter for alertAllAppearancesForGroupPagingCalls
     *
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @param bool|null $alertAllAppearancesForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls)
    {
        $this->alertAllAppearancesForGroupPagingCalls = $alertAllAppearancesForGroupPagingCalls;
        return $this;
    }

    /**
     * Getter for maxAppearances
     *
     * @ElementName maxAppearances
     * @return int|null
     */
    public function getMaxAppearances()
    {
        return $this->maxAppearances;
    }

    /**
     * Setter for maxAppearances
     *
     * @ElementName maxAppearances
     * @param int|null $maxAppearances
     * @return $this
     */
    public function setMaxAppearances($maxAppearances)
    {
        $this->maxAppearances = $maxAppearances;
        return $this;
    }

    /**
     * Getter for allowSCACallRetrieve
     *
     * @ElementName allowSCACallRetrieve
     * @return bool|null
     */
    public function getAllowSCACallRetrieve()
    {
        return $this->allowSCACallRetrieve;
    }

    /**
     * Setter for allowSCACallRetrieve
     *
     * @ElementName allowSCACallRetrieve
     * @param bool|null $allowSCACallRetrieve
     * @return $this
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve)
    {
        $this->allowSCACallRetrieve = $allowSCACallRetrieve;
        return $this;
    }

    /**
     * Getter for enableMultipleCallArrangement
     *
     * @ElementName enableMultipleCallArrangement
     * @return bool|null
     */
    public function getEnableMultipleCallArrangement()
    {
        return $this->enableMultipleCallArrangement;
    }

    /**
     * Setter for enableMultipleCallArrangement
     *
     * @ElementName enableMultipleCallArrangement
     * @param bool|null $enableMultipleCallArrangement
     * @return $this
     */
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement)
    {
        $this->enableMultipleCallArrangement = $enableMultipleCallArrangement;
        return $this;
    }

    /**
     * Getter for multipleCallArrangementIsActive
     *
     * @ElementName multipleCallArrangementIsActive
     * @return bool|null
     */
    public function getMultipleCallArrangementIsActive()
    {
        return $this->multipleCallArrangementIsActive;
    }

    /**
     * Setter for multipleCallArrangementIsActive
     *
     * @ElementName multipleCallArrangementIsActive
     * @param bool|null $multipleCallArrangementIsActive
     * @return $this
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive)
    {
        $this->multipleCallArrangementIsActive = $multipleCallArrangementIsActive;
        return $this;
    }

    /**
     * Getter for endpointTable
     *
     * @ElementName endpointTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getEndpointTable()
    {
        return $this->endpointTable;
    }

    /**
     * Setter for endpointTable
     *
     * @ElementName endpointTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $endpointTable
     * @return $this
     */
    public function setEndpointTable($endpointTable)
    {
        $this->endpointTable = $endpointTable;
        return $this;
    }

    /**
     * Getter for allowBridgingBetweenLocations
     *
     * @ElementName allowBridgingBetweenLocations
     * @return bool|null
     */
    public function getAllowBridgingBetweenLocations()
    {
        return $this->allowBridgingBetweenLocations;
    }

    /**
     * Setter for allowBridgingBetweenLocations
     *
     * @ElementName allowBridgingBetweenLocations
     * @param bool|null $allowBridgingBetweenLocations
     * @return $this
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations)
    {
        $this->allowBridgingBetweenLocations = $allowBridgingBetweenLocations;
        return $this;
    }

    /**
     * Getter for bridgeWarningTone
     *
     * @ElementName bridgeWarningTone
     * @return string|null
     */
    public function getBridgeWarningTone()
    {
        return $this->bridgeWarningTone;
    }

    /**
     * Setter for bridgeWarningTone
     *
     * @ElementName bridgeWarningTone
     * @param string|null $bridgeWarningTone
     * @return $this
     */
    public function setBridgeWarningTone($bridgeWarningTone)
    {
        $this->bridgeWarningTone = $bridgeWarningTone;
        return $this;
    }

    /**
     * Getter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @return bool|null
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @param bool|null $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }

    /**
     * Getter for useUserPrimaryWithAlternateCallsSetting
     *
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @return bool|null
     */
    public function getUseUserPrimaryWithAlternateCallsSetting()
    {
        return $this->useUserPrimaryWithAlternateCallsSetting;
    }

    /**
     * Setter for useUserPrimaryWithAlternateCallsSetting
     *
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @param bool|null $useUserPrimaryWithAlternateCallsSetting
     * @return $this
     */
    public function setUseUserPrimaryWithAlternateCallsSetting($useUserPrimaryWithAlternateCallsSetting)
    {
        $this->useUserPrimaryWithAlternateCallsSetting = $useUserPrimaryWithAlternateCallsSetting;
        return $this;
    }

    /**
     * Getter for allowSimultaneousPrimaryAndAlternate
     *
     * @ElementName allowSimultaneousPrimaryAndAlternate
     * @return bool|null
     */
    public function getAllowSimultaneousPrimaryAndAlternate()
    {
        return $this->allowSimultaneousPrimaryAndAlternate;
    }

    /**
     * Setter for allowSimultaneousPrimaryAndAlternate
     *
     * @ElementName allowSimultaneousPrimaryAndAlternate
     * @param bool|null $allowSimultaneousPrimaryAndAlternate
     * @return $this
     */
    public function setAllowSimultaneousPrimaryAndAlternate($allowSimultaneousPrimaryAndAlternate)
    {
        $this->allowSimultaneousPrimaryAndAlternate = $allowSimultaneousPrimaryAndAlternate;
        return $this;
    }

    /**
     * Getter for restrictCallRetrieveOfPrimary
     *
     * @ElementName restrictCallRetrieveOfPrimary
     * @return bool|null
     */
    public function getRestrictCallRetrieveOfPrimary()
    {
        return $this->restrictCallRetrieveOfPrimary;
    }

    /**
     * Setter for restrictCallRetrieveOfPrimary
     *
     * @ElementName restrictCallRetrieveOfPrimary
     * @param bool|null $restrictCallRetrieveOfPrimary
     * @return $this
     */
    public function setRestrictCallRetrieveOfPrimary($restrictCallRetrieveOfPrimary)
    {
        $this->restrictCallRetrieveOfPrimary = $restrictCallRetrieveOfPrimary;
        return $this;
    }

    /**
     * Getter for restrictCallBridgingOfPrimary
     *
     * @ElementName restrictCallBridgingOfPrimary
     * @return bool|null
     */
    public function getRestrictCallBridgingOfPrimary()
    {
        return $this->restrictCallBridgingOfPrimary;
    }

    /**
     * Setter for restrictCallBridgingOfPrimary
     *
     * @ElementName restrictCallBridgingOfPrimary
     * @param bool|null $restrictCallBridgingOfPrimary
     * @return $this
     */
    public function setRestrictCallBridgingOfPrimary($restrictCallBridgingOfPrimary)
    {
        $this->restrictCallBridgingOfPrimary = $restrictCallBridgingOfPrimary;
        return $this;
    }


}

