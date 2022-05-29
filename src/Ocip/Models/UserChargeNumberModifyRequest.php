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
 * @Groups [{"id":"9e6c3cffd40902dc6325620cc5e3adef:74","type":"sequence"}]
 */
class UserChargeNumberModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9e6c3cffd40902dc6325620cc5e3adef:74
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 9e6c3cffd40902dc6325620cc5e3adef:74
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $phoneNumber = null;

    /**
     * @ElementName useChargeNumberForEnhancedTranslations
     * @Type bool
     * @Optional
     * @Group 9e6c3cffd40902dc6325620cc5e3adef:74
     * @var bool|null
     */
    protected $useChargeNumberForEnhancedTranslations = null;

    /**
     * @ElementName sendChargeNumberToNetwork
     * @Type bool
     * @Optional
     * @Group 9e6c3cffd40902dc6325620cc5e3adef:74
     * @var bool|null
     */
    protected $sendChargeNumberToNetwork = null;

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
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if ($phoneNumber === null) {
            $this->phoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber = $phoneNumber;
        }
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
     * Getter for useChargeNumberForEnhancedTranslations
     *
     * @return bool
     */
    public function getUseChargeNumberForEnhancedTranslations()
    {
        return $this->useChargeNumberForEnhancedTranslations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useChargeNumberForEnhancedTranslations;
    }

    /**
     * Setter for useChargeNumberForEnhancedTranslations
     *
     * @param bool $useChargeNumberForEnhancedTranslations
     * @return $this
     */
    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations)
    {
        $this->useChargeNumberForEnhancedTranslations = $useChargeNumberForEnhancedTranslations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseChargeNumberForEnhancedTranslations()
    {
        $this->useChargeNumberForEnhancedTranslations = null;
        return $this;
    }

    /**
     * Getter for sendChargeNumberToNetwork
     *
     * @return bool
     */
    public function getSendChargeNumberToNetwork()
    {
        return $this->sendChargeNumberToNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendChargeNumberToNetwork;
    }

    /**
     * Setter for sendChargeNumberToNetwork
     *
     * @param bool $sendChargeNumberToNetwork
     * @return $this
     */
    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork)
    {
        $this->sendChargeNumberToNetwork = $sendChargeNumberToNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendChargeNumberToNetwork()
    {
        $this->sendChargeNumberToNetwork = null;
        return $this;
    }


}

