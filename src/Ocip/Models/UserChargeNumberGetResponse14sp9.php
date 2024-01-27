<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberGetResponse14sp9
 *
 * Response to UserChargeNumberGetRequest14sp9.
 *
 * @see UserChargeNumberGetRequest14sp9
 * @Groups [{"id":"e1ee26e6fdadbb813e9077c4ea7fd6d1:56","type":"sequence"}]
 */
class UserChargeNumberGetResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group e1ee26e6fdadbb813e9077c4ea7fd6d1:56
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName useChargeNumberForEnhancedTranslations
     * @Type bool
     * @Group e1ee26e6fdadbb813e9077c4ea7fd6d1:56
     * @var bool|null
     */
    protected $useChargeNumberForEnhancedTranslations = null;

    /**
     * @ElementName sendChargeNumberToNetwork
     * @Type bool
     * @Group e1ee26e6fdadbb813e9077c4ea7fd6d1:56
     * @var bool|null
     */
    protected $sendChargeNumberToNetwork = null;

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

