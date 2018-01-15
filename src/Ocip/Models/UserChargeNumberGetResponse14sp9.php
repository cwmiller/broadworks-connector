<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberGetResponse14sp9
 *
 * Response to UserChargeNumberGetRequest14sp9.
 */
class UserChargeNumberGetResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

