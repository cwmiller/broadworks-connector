<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceModifyRequest
 *
 * Modify the user's Shared Call Appearance service setting.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *          
 *          The following elements are only used in XS data mode and ignored in AS data mode:
 *            useUserPrimaryWithAlternateCallsSetting
 *            allowSimultaneousPrimaryAndAlternate
 *            restrictCallRetrieveOfPrimary
 *            restrictCallBridgingOfPrimary
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"524e0d071a229a44af2f953d6b50db35:212","type":"sequence"}]
 */
class UserSharedCallAppearanceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName alertAllAppearancesForClickToDialCalls
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $alertAllAppearancesForClickToDialCalls = null;

    /**
     * @ElementName alertAllAppearancesForGroupPagingCalls
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $alertAllAppearancesForGroupPagingCalls = null;

    /**
     * @ElementName allowSCACallRetrieve
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $allowSCACallRetrieve = null;

    /**
     * @ElementName multipleCallArrangementIsActive
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $multipleCallArrangementIsActive = null;

    /**
     * @ElementName allowBridgingBetweenLocations
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $allowBridgingBetweenLocations = null;

    /**
     * @ElementName bridgeWarningTone
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var \CWM\BroadWorksConnector\Ocip\Models\SharedCallAppearanceBridgeWarningTone|null
     */
    protected $bridgeWarningTone = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $enableCallParkNotification = null;

    /**
     * @ElementName useUserPrimaryWithAlternateCallsSetting
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $useUserPrimaryWithAlternateCallsSetting = null;

    /**
     * @ElementName allowSimultaneousPrimaryAndAlternateCalls
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $allowSimultaneousPrimaryAndAlternateCalls = null;

    /**
     * @ElementName restrictCallRetrieveOfPrimaryCall
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $restrictCallRetrieveOfPrimaryCall = null;

    /**
     * @ElementName restrictCallBridgingOfPrimaryCall
     * @Type bool
     * @Optional
     * @Group 524e0d071a229a44af2f953d6b50db35:212
     * @var bool|null
     */
    protected $restrictCallBridgingOfPrimaryCall = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * Getter for allowSimultaneousPrimaryAndAlternateCalls
     *
     * @return bool
     */
    public function getAllowSimultaneousPrimaryAndAlternateCalls()
    {
        return $this->allowSimultaneousPrimaryAndAlternateCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowSimultaneousPrimaryAndAlternateCalls;
    }

    /**
     * Setter for allowSimultaneousPrimaryAndAlternateCalls
     *
     * @param bool $allowSimultaneousPrimaryAndAlternateCalls
     * @return $this
     */
    public function setAllowSimultaneousPrimaryAndAlternateCalls($allowSimultaneousPrimaryAndAlternateCalls)
    {
        $this->allowSimultaneousPrimaryAndAlternateCalls = $allowSimultaneousPrimaryAndAlternateCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowSimultaneousPrimaryAndAlternateCalls()
    {
        $this->allowSimultaneousPrimaryAndAlternateCalls = null;
        return $this;
    }

    /**
     * Getter for restrictCallRetrieveOfPrimaryCall
     *
     * @return bool
     */
    public function getRestrictCallRetrieveOfPrimaryCall()
    {
        return $this->restrictCallRetrieveOfPrimaryCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictCallRetrieveOfPrimaryCall;
    }

    /**
     * Setter for restrictCallRetrieveOfPrimaryCall
     *
     * @param bool $restrictCallRetrieveOfPrimaryCall
     * @return $this
     */
    public function setRestrictCallRetrieveOfPrimaryCall($restrictCallRetrieveOfPrimaryCall)
    {
        $this->restrictCallRetrieveOfPrimaryCall = $restrictCallRetrieveOfPrimaryCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictCallRetrieveOfPrimaryCall()
    {
        $this->restrictCallRetrieveOfPrimaryCall = null;
        return $this;
    }

    /**
     * Getter for restrictCallBridgingOfPrimaryCall
     *
     * @return bool
     */
    public function getRestrictCallBridgingOfPrimaryCall()
    {
        return $this->restrictCallBridgingOfPrimaryCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictCallBridgingOfPrimaryCall;
    }

    /**
     * Setter for restrictCallBridgingOfPrimaryCall
     *
     * @param bool $restrictCallBridgingOfPrimaryCall
     * @return $this
     */
    public function setRestrictCallBridgingOfPrimaryCall($restrictCallBridgingOfPrimaryCall)
    {
        $this->restrictCallBridgingOfPrimaryCall = $restrictCallBridgingOfPrimaryCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictCallBridgingOfPrimaryCall()
    {
        $this->restrictCallBridgingOfPrimaryCall = null;
        return $this;
    }


}

