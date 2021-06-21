<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetScreeningAlertingResponse
 *
 * Response to the UserExecutiveGetScreeningAlertingRequest.
 *         Contains the screening and alerting settings for an executive.
 *
 * @see UserExecutiveGetScreeningAlertingRequest
 * @Groups [{"id":"9a6dbade05624033cf7fe782b7c9a9a7:322","type":"sequence"}]
 */
class UserExecutiveGetScreeningAlertingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableScreening
     * @Type bool
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var bool|null
     */
    private $enableScreening = null;

    /**
     * @ElementName screeningAlertType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType|null
     */
    private $screeningAlertType = null;

    /**
     * @ElementName alertBroadWorksMobilityLocation
     * @Type bool
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var bool|null
     */
    private $alertBroadWorksMobilityLocation = null;

    /**
     * @ElementName alertBroadWorksAnywhereLocations
     * @Type bool
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var bool|null
     */
    private $alertBroadWorksAnywhereLocations = null;

    /**
     * @ElementName alertSharedCallAppearanceLocations
     * @Type bool
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var bool|null
     */
    private $alertSharedCallAppearanceLocations = null;

    /**
     * @ElementName alertingMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode|null
     */
    private $alertingMode = null;

    /**
     * @ElementName alertingCallingLineIdNameMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode|null
     */
    private $alertingCallingLineIdNameMode = null;

    /**
     * @ElementName alertingCustomCallingLineIdName
     * @Type string
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $alertingCustomCallingLineIdName = null;

    /**
     * @ElementName unicodeAlertingCustomCallingLineIdName
     * @Type string
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $unicodeAlertingCustomCallingLineIdName = null;

    /**
     * @ElementName alertingCallingLineIdPhoneNumberMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode|null
     */
    private $alertingCallingLineIdPhoneNumberMode = null;

    /**
     * @ElementName alertingCustomCallingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $alertingCustomCallingLineIdPhoneNumber = null;

    /**
     * @ElementName callPushRecallNumberOfRings
     * @Type int
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    private $callPushRecallNumberOfRings = null;

    /**
     * @ElementName nextAssistantNumberOfRings
     * @Type int
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    private $nextAssistantNumberOfRings = null;

    /**
     * @ElementName enableRollover
     * @Type bool
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var bool|null
     */
    private $enableRollover = null;

    /**
     * @ElementName rolloverWaitTimeSeconds
     * @Type int
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinInclusive 0
     * @MaxInclusive 7200
     * @var int|null
     */
    private $rolloverWaitTimeSeconds = null;

    /**
     * @ElementName rolloverAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType|null
     */
    private $rolloverAction = null;

    /**
     * @ElementName rolloverForwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:322
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $rolloverForwardToPhoneNumber = null;

    /**
     * Getter for enableScreening
     *
     * @return bool
     */
    public function getEnableScreening()
    {
        return $this->enableScreening instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableScreening;
    }

    /**
     * Setter for enableScreening
     *
     * @param bool $enableScreening
     * @return $this
     */
    public function setEnableScreening($enableScreening)
    {
        $this->enableScreening = $enableScreening;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableScreening()
    {
        $this->enableScreening = null;
        return $this;
    }

    /**
     * Getter for screeningAlertType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType
     */
    public function getScreeningAlertType()
    {
        return $this->screeningAlertType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->screeningAlertType;
    }

    /**
     * Setter for screeningAlertType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType $screeningAlertType
     * @return $this
     */
    public function setScreeningAlertType(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveScreeningAlertType $screeningAlertType)
    {
        $this->screeningAlertType = $screeningAlertType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScreeningAlertType()
    {
        $this->screeningAlertType = null;
        return $this;
    }

    /**
     * Getter for alertBroadWorksMobilityLocation
     *
     * @return bool
     */
    public function getAlertBroadWorksMobilityLocation()
    {
        return $this->alertBroadWorksMobilityLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertBroadWorksMobilityLocation;
    }

    /**
     * Setter for alertBroadWorksMobilityLocation
     *
     * @param bool $alertBroadWorksMobilityLocation
     * @return $this
     */
    public function setAlertBroadWorksMobilityLocation($alertBroadWorksMobilityLocation)
    {
        $this->alertBroadWorksMobilityLocation = $alertBroadWorksMobilityLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertBroadWorksMobilityLocation()
    {
        $this->alertBroadWorksMobilityLocation = null;
        return $this;
    }

    /**
     * Getter for alertBroadWorksAnywhereLocations
     *
     * @return bool
     */
    public function getAlertBroadWorksAnywhereLocations()
    {
        return $this->alertBroadWorksAnywhereLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertBroadWorksAnywhereLocations;
    }

    /**
     * Setter for alertBroadWorksAnywhereLocations
     *
     * @param bool $alertBroadWorksAnywhereLocations
     * @return $this
     */
    public function setAlertBroadWorksAnywhereLocations($alertBroadWorksAnywhereLocations)
    {
        $this->alertBroadWorksAnywhereLocations = $alertBroadWorksAnywhereLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertBroadWorksAnywhereLocations()
    {
        $this->alertBroadWorksAnywhereLocations = null;
        return $this;
    }

    /**
     * Getter for alertSharedCallAppearanceLocations
     *
     * @return bool
     */
    public function getAlertSharedCallAppearanceLocations()
    {
        return $this->alertSharedCallAppearanceLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertSharedCallAppearanceLocations;
    }

    /**
     * Setter for alertSharedCallAppearanceLocations
     *
     * @param bool $alertSharedCallAppearanceLocations
     * @return $this
     */
    public function setAlertSharedCallAppearanceLocations($alertSharedCallAppearanceLocations)
    {
        $this->alertSharedCallAppearanceLocations = $alertSharedCallAppearanceLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertSharedCallAppearanceLocations()
    {
        $this->alertSharedCallAppearanceLocations = null;
        return $this;
    }

    /**
     * Getter for alertingMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode
     */
    public function getAlertingMode()
    {
        return $this->alertingMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingMode;
    }

    /**
     * Setter for alertingMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode $alertingMode
     * @return $this
     */
    public function setAlertingMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingMode $alertingMode)
    {
        $this->alertingMode = $alertingMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingMode()
    {
        $this->alertingMode = null;
        return $this;
    }

    /**
     * Getter for alertingCallingLineIdNameMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode
     */
    public function getAlertingCallingLineIdNameMode()
    {
        return $this->alertingCallingLineIdNameMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingCallingLineIdNameMode;
    }

    /**
     * Setter for alertingCallingLineIdNameMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode $alertingCallingLineIdNameMode
     * @return $this
     */
    public function setAlertingCallingLineIdNameMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdNameMode $alertingCallingLineIdNameMode)
    {
        $this->alertingCallingLineIdNameMode = $alertingCallingLineIdNameMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingCallingLineIdNameMode()
    {
        $this->alertingCallingLineIdNameMode = null;
        return $this;
    }

    /**
     * Getter for alertingCustomCallingLineIdName
     *
     * @return string
     */
    public function getAlertingCustomCallingLineIdName()
    {
        return $this->alertingCustomCallingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingCustomCallingLineIdName;
    }

    /**
     * Setter for alertingCustomCallingLineIdName
     *
     * @param string $alertingCustomCallingLineIdName
     * @return $this
     */
    public function setAlertingCustomCallingLineIdName($alertingCustomCallingLineIdName)
    {
        $this->alertingCustomCallingLineIdName = $alertingCustomCallingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingCustomCallingLineIdName()
    {
        $this->alertingCustomCallingLineIdName = null;
        return $this;
    }

    /**
     * Getter for unicodeAlertingCustomCallingLineIdName
     *
     * @return string
     */
    public function getUnicodeAlertingCustomCallingLineIdName()
    {
        return $this->unicodeAlertingCustomCallingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unicodeAlertingCustomCallingLineIdName;
    }

    /**
     * Setter for unicodeAlertingCustomCallingLineIdName
     *
     * @param string $unicodeAlertingCustomCallingLineIdName
     * @return $this
     */
    public function setUnicodeAlertingCustomCallingLineIdName($unicodeAlertingCustomCallingLineIdName)
    {
        $this->unicodeAlertingCustomCallingLineIdName = $unicodeAlertingCustomCallingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnicodeAlertingCustomCallingLineIdName()
    {
        $this->unicodeAlertingCustomCallingLineIdName = null;
        return $this;
    }

    /**
     * Getter for alertingCallingLineIdPhoneNumberMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode
     */
    public function getAlertingCallingLineIdPhoneNumberMode()
    {
        return $this->alertingCallingLineIdPhoneNumberMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingCallingLineIdPhoneNumberMode;
    }

    /**
     * Setter for alertingCallingLineIdPhoneNumberMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode $alertingCallingLineIdPhoneNumberMode
     * @return $this
     */
    public function setAlertingCallingLineIdPhoneNumberMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveAlertingCallingLineIdPhoneNumberMode $alertingCallingLineIdPhoneNumberMode)
    {
        $this->alertingCallingLineIdPhoneNumberMode = $alertingCallingLineIdPhoneNumberMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingCallingLineIdPhoneNumberMode()
    {
        $this->alertingCallingLineIdPhoneNumberMode = null;
        return $this;
    }

    /**
     * Getter for alertingCustomCallingLineIdPhoneNumber
     *
     * @return string
     */
    public function getAlertingCustomCallingLineIdPhoneNumber()
    {
        return $this->alertingCustomCallingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingCustomCallingLineIdPhoneNumber;
    }

    /**
     * Setter for alertingCustomCallingLineIdPhoneNumber
     *
     * @param string $alertingCustomCallingLineIdPhoneNumber
     * @return $this
     */
    public function setAlertingCustomCallingLineIdPhoneNumber($alertingCustomCallingLineIdPhoneNumber)
    {
        $this->alertingCustomCallingLineIdPhoneNumber = $alertingCustomCallingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingCustomCallingLineIdPhoneNumber()
    {
        $this->alertingCustomCallingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for callPushRecallNumberOfRings
     *
     * @return int
     */
    public function getCallPushRecallNumberOfRings()
    {
        return $this->callPushRecallNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callPushRecallNumberOfRings;
    }

    /**
     * Setter for callPushRecallNumberOfRings
     *
     * @param int $callPushRecallNumberOfRings
     * @return $this
     */
    public function setCallPushRecallNumberOfRings($callPushRecallNumberOfRings)
    {
        $this->callPushRecallNumberOfRings = $callPushRecallNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallPushRecallNumberOfRings()
    {
        $this->callPushRecallNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for nextAssistantNumberOfRings
     *
     * @return int
     */
    public function getNextAssistantNumberOfRings()
    {
        return $this->nextAssistantNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nextAssistantNumberOfRings;
    }

    /**
     * Setter for nextAssistantNumberOfRings
     *
     * @param int $nextAssistantNumberOfRings
     * @return $this
     */
    public function setNextAssistantNumberOfRings($nextAssistantNumberOfRings)
    {
        $this->nextAssistantNumberOfRings = $nextAssistantNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNextAssistantNumberOfRings()
    {
        $this->nextAssistantNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for enableRollover
     *
     * @return bool
     */
    public function getEnableRollover()
    {
        return $this->enableRollover instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRollover;
    }

    /**
     * Setter for enableRollover
     *
     * @param bool $enableRollover
     * @return $this
     */
    public function setEnableRollover($enableRollover)
    {
        $this->enableRollover = $enableRollover;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRollover()
    {
        $this->enableRollover = null;
        return $this;
    }

    /**
     * Getter for rolloverWaitTimeSeconds
     *
     * @return int
     */
    public function getRolloverWaitTimeSeconds()
    {
        return $this->rolloverWaitTimeSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rolloverWaitTimeSeconds;
    }

    /**
     * Setter for rolloverWaitTimeSeconds
     *
     * @param int $rolloverWaitTimeSeconds
     * @return $this
     */
    public function setRolloverWaitTimeSeconds($rolloverWaitTimeSeconds)
    {
        $this->rolloverWaitTimeSeconds = $rolloverWaitTimeSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRolloverWaitTimeSeconds()
    {
        $this->rolloverWaitTimeSeconds = null;
        return $this;
    }

    /**
     * Getter for rolloverAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType
     */
    public function getRolloverAction()
    {
        return $this->rolloverAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rolloverAction;
    }

    /**
     * Setter for rolloverAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType $rolloverAction
     * @return $this
     */
    public function setRolloverAction(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveRolloverActionType $rolloverAction)
    {
        $this->rolloverAction = $rolloverAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRolloverAction()
    {
        $this->rolloverAction = null;
        return $this;
    }

    /**
     * Getter for rolloverForwardToPhoneNumber
     *
     * @return string
     */
    public function getRolloverForwardToPhoneNumber()
    {
        return $this->rolloverForwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rolloverForwardToPhoneNumber;
    }

    /**
     * Setter for rolloverForwardToPhoneNumber
     *
     * @param string $rolloverForwardToPhoneNumber
     * @return $this
     */
    public function setRolloverForwardToPhoneNumber($rolloverForwardToPhoneNumber)
    {
        $this->rolloverForwardToPhoneNumber = $rolloverForwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRolloverForwardToPhoneNumber()
    {
        $this->rolloverForwardToPhoneNumber = null;
        return $this;
    }


}

