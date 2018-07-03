<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberModifyRequest
 *
 * Modify the user level data associated with Charge Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserChargeNumberModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName useChargeNumberForEnhancedTranslations
     * @var bool|null
     */
    private $useChargeNumberForEnhancedTranslations = null;

    /**
     * @ElementName sendChargeNumberToNetwork
     * @var bool|null
     */
    private $sendChargeNumberToNetwork = null;

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
     * Getter for useChargeNumberForEnhancedTranslations
     *
     * @ElementName useChargeNumberForEnhancedTranslations
     * @return bool|null
     */
    public function getUseChargeNumberForEnhancedTranslations()
    {
        return $this->useChargeNumberForEnhancedTranslations;
    }

    /**
     * Setter for useChargeNumberForEnhancedTranslations
     *
     * @ElementName useChargeNumberForEnhancedTranslations
     * @param bool|null $useChargeNumberForEnhancedTranslations
     * @return $this
     */
    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations)
    {
        $this->useChargeNumberForEnhancedTranslations = $useChargeNumberForEnhancedTranslations;
        return $this;
    }

    /**
     * Getter for sendChargeNumberToNetwork
     *
     * @ElementName sendChargeNumberToNetwork
     * @return bool|null
     */
    public function getSendChargeNumberToNetwork()
    {
        return $this->sendChargeNumberToNetwork;
    }

    /**
     * Setter for sendChargeNumberToNetwork
     *
     * @ElementName sendChargeNumberToNetwork
     * @param bool|null $sendChargeNumberToNetwork
     * @return $this
     */
    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork)
    {
        $this->sendChargeNumberToNetwork = $sendChargeNumberToNetwork;
        return $this;
    }


}

