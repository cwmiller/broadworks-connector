<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetResponse14
 *
 * Response to the UserSharedCallAppearanceGetRequest14.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         Replaced By: UserSharedCallAppearanceGetResponse14sp2
 *
 * @see UserSharedCallAppearanceGetRequest14
 * @see UserSharedCallAppearanceGetResponse14sp2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47075","type":"sequence"}]
 */
class UserSharedCallAppearanceGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var bool|null
     */
    protected $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName maxAppearances
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var int|null
     */
    protected $maxAppearances = null;

    /**
     * @ElementName enableMultipleCallArrangement
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var bool|null
     */
    protected $enableMultipleCallArrangement = null;

    /**
     * @ElementName multipleCallArrangementIsActive
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var bool|null
     */
    protected $multipleCallArrangementIsActive = null;

    /**
     * @ElementName endpointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $endpointTable = null;

    /**
     * @ElementName allowBridgingBetweenLocations
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var bool|null
     */
    protected $allowBridgingBetweenLocations = null;

    /**
     * @ElementName bridgeWarningTone
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone
     * @Group d8f04177e438f303b41c211e518706bf:47075
     * @var \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone|null
     */
    protected $bridgeWarningTone = null;

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
}

