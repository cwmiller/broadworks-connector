<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveModifyScreeningAlertingRequest
 *
 * Modify the screening and alerting setting of an executive.
 *         Both executive and the executive assistant can run this command.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserExecutiveModifyScreeningAlertingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableScreening
     * @var bool|null
     */
    private $enableScreening = null;

    /**
     * @ElementName screeningAlertType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType|null
     */
    private $screeningAlertType = null;

    /**
     * @ElementName alertBroadWorksMobilityLocation
     * @var bool|null
     */
    private $alertBroadWorksMobilityLocation = null;

    /**
     * @ElementName alertBroadWorksAnywhereLocations
     * @var bool|null
     */
    private $alertBroadWorksAnywhereLocations = null;

    /**
     * @ElementName alertSharedCallAppearanceLocations
     * @var bool|null
     */
    private $alertSharedCallAppearanceLocations = null;

    /**
     * @ElementName alertingMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode|null
     */
    private $alertingMode = null;

    /**
     * @ElementName alertingCallingLineIdNameMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode|null
     */
    private $alertingCallingLineIdNameMode = null;

    /**
     * @ElementName alertingCustomCallingLineIdName
     * @var string|null
     */
    private $alertingCustomCallingLineIdName = null;

    /**
     * @ElementName unicodeAlertingCustomCallingLineIdName
     * @var string|null
     */
    private $unicodeAlertingCustomCallingLineIdName = null;

    /**
     * @ElementName alertingCallingLineIdPhoneNumberMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode|null
     */
    private $alertingCallingLineIdPhoneNumberMode = null;

    /**
     * @ElementName alertingCustomCallingLineIdPhoneNumber
     * @var string|null
     */
    private $alertingCustomCallingLineIdPhoneNumber = null;

    /**
     * @ElementName callPushRecallNumberOfRings
     * @var int|null
     */
    private $callPushRecallNumberOfRings = null;

    /**
     * @ElementName nextAssistantNumberOfRings
     * @var int|null
     */
    private $nextAssistantNumberOfRings = null;

    /**
     * @ElementName enableRollover
     * @var bool|null
     */
    private $enableRollover = null;

    /**
     * @ElementName rolloverWaitTimeSeconds
     * @var int|null
     */
    private $rolloverWaitTimeSeconds = null;

    /**
     * @ElementName rolloverAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType|null
     */
    private $rolloverAction = null;

    /**
     * @ElementName rolloverForwardToPhoneNumber
     * @var string|null
     */
    private $rolloverForwardToPhoneNumber = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for enableScreening
     *
     * @ElementName enableScreening
     * @return bool|null
     */
    public function getEnableScreening()
    {
        return $this->enableScreening;
    }

    /**
     * Setter for enableScreening
     *
     * @ElementName enableScreening
     * @param bool|null $enableScreening
     * @return $this
     */
    public function setEnableScreening($enableScreening)
    {
        $this->enableScreening = $enableScreening;
        return $this;
    }

    /**
     * Getter for screeningAlertType
     *
     * @ElementName screeningAlertType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType|null
     */
    public function getScreeningAlertType()
    {
        return $this->screeningAlertType;
    }

    /**
     * Setter for screeningAlertType
     *
     * @ElementName screeningAlertType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType|null $screeningAlertType
     * @return $this
     */
    public function setScreeningAlertType(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType $screeningAlertType)
    {
        $this->screeningAlertType = $screeningAlertType;
        return $this;
    }

    /**
     * Getter for alertBroadWorksMobilityLocation
     *
     * @ElementName alertBroadWorksMobilityLocation
     * @return bool|null
     */
    public function getAlertBroadWorksMobilityLocation()
    {
        return $this->alertBroadWorksMobilityLocation;
    }

    /**
     * Setter for alertBroadWorksMobilityLocation
     *
     * @ElementName alertBroadWorksMobilityLocation
     * @param bool|null $alertBroadWorksMobilityLocation
     * @return $this
     */
    public function setAlertBroadWorksMobilityLocation($alertBroadWorksMobilityLocation)
    {
        $this->alertBroadWorksMobilityLocation = $alertBroadWorksMobilityLocation;
        return $this;
    }

    /**
     * Getter for alertBroadWorksAnywhereLocations
     *
     * @ElementName alertBroadWorksAnywhereLocations
     * @return bool|null
     */
    public function getAlertBroadWorksAnywhereLocations()
    {
        return $this->alertBroadWorksAnywhereLocations;
    }

    /**
     * Setter for alertBroadWorksAnywhereLocations
     *
     * @ElementName alertBroadWorksAnywhereLocations
     * @param bool|null $alertBroadWorksAnywhereLocations
     * @return $this
     */
    public function setAlertBroadWorksAnywhereLocations($alertBroadWorksAnywhereLocations)
    {
        $this->alertBroadWorksAnywhereLocations = $alertBroadWorksAnywhereLocations;
        return $this;
    }

    /**
     * Getter for alertSharedCallAppearanceLocations
     *
     * @ElementName alertSharedCallAppearanceLocations
     * @return bool|null
     */
    public function getAlertSharedCallAppearanceLocations()
    {
        return $this->alertSharedCallAppearanceLocations;
    }

    /**
     * Setter for alertSharedCallAppearanceLocations
     *
     * @ElementName alertSharedCallAppearanceLocations
     * @param bool|null $alertSharedCallAppearanceLocations
     * @return $this
     */
    public function setAlertSharedCallAppearanceLocations($alertSharedCallAppearanceLocations)
    {
        $this->alertSharedCallAppearanceLocations = $alertSharedCallAppearanceLocations;
        return $this;
    }

    /**
     * Getter for alertingMode
     *
     * @ElementName alertingMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode|null
     */
    public function getAlertingMode()
    {
        return $this->alertingMode;
    }

    /**
     * Setter for alertingMode
     *
     * @ElementName alertingMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode|null $alertingMode
     * @return $this
     */
    public function setAlertingMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode $alertingMode)
    {
        $this->alertingMode = $alertingMode;
        return $this;
    }

    /**
     * Getter for alertingCallingLineIdNameMode
     *
     * @ElementName alertingCallingLineIdNameMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode|null
     */
    public function getAlertingCallingLineIdNameMode()
    {
        return $this->alertingCallingLineIdNameMode;
    }

    /**
     * Setter for alertingCallingLineIdNameMode
     *
     * @ElementName alertingCallingLineIdNameMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode|null $alertingCallingLineIdNameMode
     * @return $this
     */
    public function setAlertingCallingLineIdNameMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode $alertingCallingLineIdNameMode)
    {
        $this->alertingCallingLineIdNameMode = $alertingCallingLineIdNameMode;
        return $this;
    }

    /**
     * Getter for alertingCustomCallingLineIdName
     *
     * @ElementName alertingCustomCallingLineIdName
     * @return string|null
     */
    public function getAlertingCustomCallingLineIdName()
    {
        return $this->alertingCustomCallingLineIdName;
    }

    /**
     * Setter for alertingCustomCallingLineIdName
     *
     * @ElementName alertingCustomCallingLineIdName
     * @param string|null $alertingCustomCallingLineIdName
     * @return $this
     */
    public function setAlertingCustomCallingLineIdName($alertingCustomCallingLineIdName)
    {
        $this->alertingCustomCallingLineIdName = $alertingCustomCallingLineIdName;
        return $this;
    }

    /**
     * Getter for unicodeAlertingCustomCallingLineIdName
     *
     * @ElementName unicodeAlertingCustomCallingLineIdName
     * @return string|null
     */
    public function getUnicodeAlertingCustomCallingLineIdName()
    {
        return $this->unicodeAlertingCustomCallingLineIdName;
    }

    /**
     * Setter for unicodeAlertingCustomCallingLineIdName
     *
     * @ElementName unicodeAlertingCustomCallingLineIdName
     * @param string|null $unicodeAlertingCustomCallingLineIdName
     * @return $this
     */
    public function setUnicodeAlertingCustomCallingLineIdName($unicodeAlertingCustomCallingLineIdName)
    {
        $this->unicodeAlertingCustomCallingLineIdName = $unicodeAlertingCustomCallingLineIdName;
        return $this;
    }

    /**
     * Getter for alertingCallingLineIdPhoneNumberMode
     *
     * @ElementName alertingCallingLineIdPhoneNumberMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode|null
     */
    public function getAlertingCallingLineIdPhoneNumberMode()
    {
        return $this->alertingCallingLineIdPhoneNumberMode;
    }

    /**
     * Setter for alertingCallingLineIdPhoneNumberMode
     *
     * @ElementName alertingCallingLineIdPhoneNumberMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode|null $alertingCallingLineIdPhoneNumberMode
     * @return $this
     */
    public function setAlertingCallingLineIdPhoneNumberMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode $alertingCallingLineIdPhoneNumberMode)
    {
        $this->alertingCallingLineIdPhoneNumberMode = $alertingCallingLineIdPhoneNumberMode;
        return $this;
    }

    /**
     * Getter for alertingCustomCallingLineIdPhoneNumber
     *
     * @ElementName alertingCustomCallingLineIdPhoneNumber
     * @return string|null
     */
    public function getAlertingCustomCallingLineIdPhoneNumber()
    {
        return $this->alertingCustomCallingLineIdPhoneNumber;
    }

    /**
     * Setter for alertingCustomCallingLineIdPhoneNumber
     *
     * @ElementName alertingCustomCallingLineIdPhoneNumber
     * @param string|null $alertingCustomCallingLineIdPhoneNumber
     * @return $this
     */
    public function setAlertingCustomCallingLineIdPhoneNumber($alertingCustomCallingLineIdPhoneNumber)
    {
        $this->alertingCustomCallingLineIdPhoneNumber = $alertingCustomCallingLineIdPhoneNumber;
        return $this;
    }

    /**
     * Getter for callPushRecallNumberOfRings
     *
     * @ElementName callPushRecallNumberOfRings
     * @return int|null
     */
    public function getCallPushRecallNumberOfRings()
    {
        return $this->callPushRecallNumberOfRings;
    }

    /**
     * Setter for callPushRecallNumberOfRings
     *
     * @ElementName callPushRecallNumberOfRings
     * @param int|null $callPushRecallNumberOfRings
     * @return $this
     */
    public function setCallPushRecallNumberOfRings($callPushRecallNumberOfRings)
    {
        $this->callPushRecallNumberOfRings = $callPushRecallNumberOfRings;
        return $this;
    }

    /**
     * Getter for nextAssistantNumberOfRings
     *
     * @ElementName nextAssistantNumberOfRings
     * @return int|null
     */
    public function getNextAssistantNumberOfRings()
    {
        return $this->nextAssistantNumberOfRings;
    }

    /**
     * Setter for nextAssistantNumberOfRings
     *
     * @ElementName nextAssistantNumberOfRings
     * @param int|null $nextAssistantNumberOfRings
     * @return $this
     */
    public function setNextAssistantNumberOfRings($nextAssistantNumberOfRings)
    {
        $this->nextAssistantNumberOfRings = $nextAssistantNumberOfRings;
        return $this;
    }

    /**
     * Getter for enableRollover
     *
     * @ElementName enableRollover
     * @return bool|null
     */
    public function getEnableRollover()
    {
        return $this->enableRollover;
    }

    /**
     * Setter for enableRollover
     *
     * @ElementName enableRollover
     * @param bool|null $enableRollover
     * @return $this
     */
    public function setEnableRollover($enableRollover)
    {
        $this->enableRollover = $enableRollover;
        return $this;
    }

    /**
     * Getter for rolloverWaitTimeSeconds
     *
     * @ElementName rolloverWaitTimeSeconds
     * @return int|null
     */
    public function getRolloverWaitTimeSeconds()
    {
        return $this->rolloverWaitTimeSeconds;
    }

    /**
     * Setter for rolloverWaitTimeSeconds
     *
     * @ElementName rolloverWaitTimeSeconds
     * @param int|null $rolloverWaitTimeSeconds
     * @return $this
     */
    public function setRolloverWaitTimeSeconds($rolloverWaitTimeSeconds)
    {
        $this->rolloverWaitTimeSeconds = $rolloverWaitTimeSeconds;
        return $this;
    }

    /**
     * Getter for rolloverAction
     *
     * @ElementName rolloverAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType|null
     */
    public function getRolloverAction()
    {
        return $this->rolloverAction;
    }

    /**
     * Setter for rolloverAction
     *
     * @ElementName rolloverAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType|null $rolloverAction
     * @return $this
     */
    public function setRolloverAction(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType $rolloverAction)
    {
        $this->rolloverAction = $rolloverAction;
        return $this;
    }

    /**
     * Getter for rolloverForwardToPhoneNumber
     *
     * @ElementName rolloverForwardToPhoneNumber
     * @return string|null
     */
    public function getRolloverForwardToPhoneNumber()
    {
        return $this->rolloverForwardToPhoneNumber;
    }

    /**
     * Setter for rolloverForwardToPhoneNumber
     *
     * @ElementName rolloverForwardToPhoneNumber
     * @param string|null $rolloverForwardToPhoneNumber
     * @return $this
     */
    public function setRolloverForwardToPhoneNumber($rolloverForwardToPhoneNumber)
    {
        $this->rolloverForwardToPhoneNumber = $rolloverForwardToPhoneNumber;
        return $this;
    }


}

