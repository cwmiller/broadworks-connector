<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityModifyRequest
 *
 * Modify the user's broadworks mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserBroadWorksMobilityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName phonesToRing
     * @var string|null
     */
    private $phonesToRing = null;

    /**
     * @ElementName mobilePhoneNumber
     * @var string|null
     */
    private $mobilePhoneNumber = null;

    /**
     * @ElementName alertClickToDialCalls
     * @var bool|null
     */
    private $alertClickToDialCalls = null;

    /**
     * @ElementName alertGroupPagingCalls
     * @var bool|null
     */
    private $alertGroupPagingCalls = null;

    /**
     * @ElementName enableDiversionInhibitor
     * @var bool|null
     */
    private $enableDiversionInhibitor = null;

    /**
     * @ElementName requireAnswerConfirmation
     * @var bool|null
     */
    private $requireAnswerConfirmation = null;

    /**
     * @ElementName broadworksCallControl
     * @var bool|null
     */
    private $broadworksCallControl = null;

    /**
     * @ElementName useSettingLevel
     * @var string|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName denyCallOriginations
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @var bool|null
     */
    private $denyCallTerminations = null;

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
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for phonesToRing
     *
     * @ElementName phonesToRing
     * @return string|null
     */
    public function getPhonesToRing()
    {
        return $this->phonesToRing;
    }

    /**
     * Setter for phonesToRing
     *
     * @ElementName phonesToRing
     * @param string|null $phonesToRing
     * @return $this
     */
    public function setPhonesToRing($phonesToRing)
    {
        $this->phonesToRing = $phonesToRing;
        return $this;
    }

    /**
     * Getter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @param string|null $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }

    /**
     * Getter for alertClickToDialCalls
     *
     * @ElementName alertClickToDialCalls
     * @return bool|null
     */
    public function getAlertClickToDialCalls()
    {
        return $this->alertClickToDialCalls;
    }

    /**
     * Setter for alertClickToDialCalls
     *
     * @ElementName alertClickToDialCalls
     * @param bool|null $alertClickToDialCalls
     * @return $this
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls)
    {
        $this->alertClickToDialCalls = $alertClickToDialCalls;
        return $this;
    }

    /**
     * Getter for alertGroupPagingCalls
     *
     * @ElementName alertGroupPagingCalls
     * @return bool|null
     */
    public function getAlertGroupPagingCalls()
    {
        return $this->alertGroupPagingCalls;
    }

    /**
     * Setter for alertGroupPagingCalls
     *
     * @ElementName alertGroupPagingCalls
     * @param bool|null $alertGroupPagingCalls
     * @return $this
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls)
    {
        $this->alertGroupPagingCalls = $alertGroupPagingCalls;
        return $this;
    }

    /**
     * Getter for enableDiversionInhibitor
     *
     * @ElementName enableDiversionInhibitor
     * @return bool|null
     */
    public function getEnableDiversionInhibitor()
    {
        return $this->enableDiversionInhibitor;
    }

    /**
     * Setter for enableDiversionInhibitor
     *
     * @ElementName enableDiversionInhibitor
     * @param bool|null $enableDiversionInhibitor
     * @return $this
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor)
    {
        $this->enableDiversionInhibitor = $enableDiversionInhibitor;
        return $this;
    }

    /**
     * Getter for requireAnswerConfirmation
     *
     * @ElementName requireAnswerConfirmation
     * @return bool|null
     */
    public function getRequireAnswerConfirmation()
    {
        return $this->requireAnswerConfirmation;
    }

    /**
     * Setter for requireAnswerConfirmation
     *
     * @ElementName requireAnswerConfirmation
     * @param bool|null $requireAnswerConfirmation
     * @return $this
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation)
    {
        $this->requireAnswerConfirmation = $requireAnswerConfirmation;
        return $this;
    }

    /**
     * Getter for broadworksCallControl
     *
     * @ElementName broadworksCallControl
     * @return bool|null
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl;
    }

    /**
     * Setter for broadworksCallControl
     *
     * @ElementName broadworksCallControl
     * @param bool|null $broadworksCallControl
     * @return $this
     */
    public function setBroadworksCallControl($broadworksCallControl)
    {
        $this->broadworksCallControl = $broadworksCallControl;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @return string|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param string|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel($useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @return bool|null
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @param bool|null $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @return bool|null
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @param bool|null $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }


}

