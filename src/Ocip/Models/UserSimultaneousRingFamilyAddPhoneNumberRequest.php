<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyAddPhoneNumberRequest
 *
 * Add a new phone number and set the answer confirmation setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:37143","type":"sequence"}]
 */
class UserSimultaneousRingFamilyAddPhoneNumberRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:37143
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:37143
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:37143
     * @var bool|null
     */
    private $answerConfirmationRequired = null;

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


}

