<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereModifyPhoneNumberRequest
 *
 * Modify a BroadWorks Anywhere phone number
 *           The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:546","type":"sequence"}]
 */
class UserBroadWorksAnywhereModifyPhoneNumberRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName newPhoneNumber
     * @Type string
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $newPhoneNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName outboundAlternateNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $outboundAlternateNumber = null;

    /**
     * @ElementName broadworksCallControl
     * @Type bool
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @var bool|null
     */
    protected $broadworksCallControl = null;

    /**
     * @ElementName useDiversionInhibitor
     * @Type bool
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @var bool|null
     */
    protected $useDiversionInhibitor = null;

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @var bool|null
     */
    protected $answerConfirmationRequired = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:546
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    protected $criteriaActivation = array(
        
    );

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
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for newPhoneNumber
     *
     * @return string
     */
    public function getNewPhoneNumber()
    {
        return $this->newPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPhoneNumber;
    }

    /**
     * Setter for newPhoneNumber
     *
     * @param string $newPhoneNumber
     * @return $this
     */
    public function setNewPhoneNumber($newPhoneNumber)
    {
        $this->newPhoneNumber = $newPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPhoneNumber()
    {
        $this->newPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for outboundAlternateNumber
     *
     * @return string|null
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outboundAlternateNumber;
    }

    /**
     * Setter for outboundAlternateNumber
     *
     * @param string|null $outboundAlternateNumber
     * @return $this
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        if ($outboundAlternateNumber === null) {
            $this->outboundAlternateNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outboundAlternateNumber = $outboundAlternateNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutboundAlternateNumber()
    {
        $this->outboundAlternateNumber = null;
        return $this;
    }

    /**
     * Getter for broadworksCallControl
     *
     * @return bool
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->broadworksCallControl;
    }

    /**
     * Setter for broadworksCallControl
     *
     * @param bool $broadworksCallControl
     * @return $this
     */
    public function setBroadworksCallControl($broadworksCallControl)
    {
        $this->broadworksCallControl = $broadworksCallControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBroadworksCallControl()
    {
        $this->broadworksCallControl = null;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitor
     *
     * @return bool
     */
    public function getUseDiversionInhibitor()
    {
        return $this->useDiversionInhibitor instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDiversionInhibitor;
    }

    /**
     * Setter for useDiversionInhibitor
     *
     * @param bool $useDiversionInhibitor
     * @return $this
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor)
    {
        $this->useDiversionInhibitor = $useDiversionInhibitor;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDiversionInhibitor()
    {
        $this->useDiversionInhibitor = null;
        return $this;
    }

    /**
     * Getter for answerConfirmationRequired
     *
     * @return bool
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerConfirmationRequired;
    }

    /**
     * Setter for answerConfirmationRequired
     *
     * @param bool $answerConfirmationRequired
     * @return $this
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerConfirmationRequired()
    {
        $this->answerConfirmationRequired = null;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation(array $criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaActivation()
    {
        $this->criteriaActivation = null;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation[] = $criteriaActivation;
        return $this;
    }


}

