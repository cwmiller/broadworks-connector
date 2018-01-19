<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereAddPhoneNumberRequest
 *
 * Add a broadworks Anywhere phone number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksAnywhereAddPhoneNumberRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName outboundAlternateNumber
     * @var string|null
     */
    private $outboundAlternateNumber = null;

    /**
     * @ElementName broadworksCallControl
     * @var bool|null
     */
    private $broadworksCallControl = null;

    /**
     * @ElementName useDiversionInhibitor
     * @var bool|null
     */
    private $useDiversionInhibitor = null;

    /**
     * @ElementName answerConfirmationRequired
     * @var bool|null
     */
    private $answerConfirmationRequired = null;

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
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Getter for outboundAlternateNumber
     *
     * @ElementName outboundAlternateNumber
     * @return string|null
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber;
    }

    /**
     * Setter for outboundAlternateNumber
     *
     * @ElementName outboundAlternateNumber
     * @param string|null $outboundAlternateNumber
     * @return $this
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber)
    {
        $this->outboundAlternateNumber = $outboundAlternateNumber;
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
     * Getter for useDiversionInhibitor
     *
     * @ElementName useDiversionInhibitor
     * @return bool|null
     */
    public function getUseDiversionInhibitor()
    {
        return $this->useDiversionInhibitor;
    }

    /**
     * Setter for useDiversionInhibitor
     *
     * @ElementName useDiversionInhibitor
     * @param bool|null $useDiversionInhibitor
     * @return $this
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor)
    {
        $this->useDiversionInhibitor = $useDiversionInhibitor;
        return $this;
    }

    /**
     * Getter for answerConfirmationRequired
     *
     * @ElementName answerConfirmationRequired
     * @return bool|null
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired;
    }

    /**
     * Setter for answerConfirmationRequired
     *
     * @ElementName answerConfirmationRequired
     * @param bool|null $answerConfirmationRequired
     * @return $this
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        return $this;
    }


}
