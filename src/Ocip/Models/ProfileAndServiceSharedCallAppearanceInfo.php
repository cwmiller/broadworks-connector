<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSharedCallAppearanceInfo
 *
 * This is the configuration parameters for shared call appearance service
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact", "Port Number". "Private Identity" .        
 *           
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         Port numbers are only used by devices with static line ordering.
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4524","type":"sequence"}]
 */
class ProfileAndServiceSharedCallAppearanceInfo
{
    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $alertAllAppearancesForGroupPagingCalls = null;

    /**
     * @ElementName maxAppearances
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var int|null
     */
    protected $maxAppearances = null;

    /**
     * @ElementName allowSCACallRetrieve
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $allowSCACallRetrieve = null;

    /**
     * @ElementName enableMultipleCallArrangement
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $enableMultipleCallArrangement = null;

    /**
     * @ElementName multipleCallArrangementIsActive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $multipleCallArrangementIsActive = null;

    /**
     * @ElementName endpointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $endpointTable = null;

    /**
     * @ElementName allowBridgingBetweenLocations
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $allowBridgingBetweenLocations = null;

    /**
     * @ElementName bridgeWarningTone
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone|null
     */
    protected $bridgeWarningTone = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $enableCallParkNotification = null;

    /**
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $useUserPrimaryWithAlternateCallsSetting = null;

    /**
     * @ElementName allowSimultaneousPrimaryAndAlternate
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $allowSimultaneousPrimaryAndAlternate = null;

    /**
     * @ElementName restrictCallRetrieveOfPrimary
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $restrictCallRetrieveOfPrimary = null;

    /**
     * @ElementName restrictCallBridgingOfPrimary
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4524
     * @var bool|null
     */
    protected $restrictCallBridgingOfPrimary = null;

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

    /**
     * Getter for useUserPrimaryWithAlternateCallsSetting
     *
     * @return bool
     */
    public function getUseUserPrimaryWithAlternateCallsSetting()
    {
        return $this->useUserPrimaryWithAlternateCallsSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserPrimaryWithAlternateCallsSetting;
    }

    /**
     * Setter for useUserPrimaryWithAlternateCallsSetting
     *
     * @param bool $useUserPrimaryWithAlternateCallsSetting
     * @return $this
     */
    public function setUseUserPrimaryWithAlternateCallsSetting($useUserPrimaryWithAlternateCallsSetting)
    {
        $this->useUserPrimaryWithAlternateCallsSetting = $useUserPrimaryWithAlternateCallsSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserPrimaryWithAlternateCallsSetting()
    {
        $this->useUserPrimaryWithAlternateCallsSetting = null;
        return $this;
    }

    /**
     * Getter for allowSimultaneousPrimaryAndAlternate
     *
     * @return bool
     */
    public function getAllowSimultaneousPrimaryAndAlternate()
    {
        return $this->allowSimultaneousPrimaryAndAlternate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowSimultaneousPrimaryAndAlternate;
    }

    /**
     * Setter for allowSimultaneousPrimaryAndAlternate
     *
     * @param bool $allowSimultaneousPrimaryAndAlternate
     * @return $this
     */
    public function setAllowSimultaneousPrimaryAndAlternate($allowSimultaneousPrimaryAndAlternate)
    {
        $this->allowSimultaneousPrimaryAndAlternate = $allowSimultaneousPrimaryAndAlternate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowSimultaneousPrimaryAndAlternate()
    {
        $this->allowSimultaneousPrimaryAndAlternate = null;
        return $this;
    }

    /**
     * Getter for restrictCallRetrieveOfPrimary
     *
     * @return bool
     */
    public function getRestrictCallRetrieveOfPrimary()
    {
        return $this->restrictCallRetrieveOfPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictCallRetrieveOfPrimary;
    }

    /**
     * Setter for restrictCallRetrieveOfPrimary
     *
     * @param bool $restrictCallRetrieveOfPrimary
     * @return $this
     */
    public function setRestrictCallRetrieveOfPrimary($restrictCallRetrieveOfPrimary)
    {
        $this->restrictCallRetrieveOfPrimary = $restrictCallRetrieveOfPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictCallRetrieveOfPrimary()
    {
        $this->restrictCallRetrieveOfPrimary = null;
        return $this;
    }

    /**
     * Getter for restrictCallBridgingOfPrimary
     *
     * @return bool
     */
    public function getRestrictCallBridgingOfPrimary()
    {
        return $this->restrictCallBridgingOfPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictCallBridgingOfPrimary;
    }

    /**
     * Setter for restrictCallBridgingOfPrimary
     *
     * @param bool $restrictCallBridgingOfPrimary
     * @return $this
     */
    public function setRestrictCallBridgingOfPrimary($restrictCallBridgingOfPrimary)
    {
        $this->restrictCallBridgingOfPrimary = $restrictCallBridgingOfPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictCallBridgingOfPrimary()
    {
        $this->restrictCallBridgingOfPrimary = null;
        return $this;
    }
}

