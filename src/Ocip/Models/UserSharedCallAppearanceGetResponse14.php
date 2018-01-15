<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetResponse14
 *
 * Response to the UserSharedCallAppearanceGetRequest14.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP
 * Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel
 * enumerated constants.
 *         Replaced By: UserSharedCallAppearanceGetResponse14sp2
 */
class UserSharedCallAppearanceGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @var bool|null
     */
    private $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName maxAppearances
     * @var int|null
     */
    private $maxAppearances = null;

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


}

