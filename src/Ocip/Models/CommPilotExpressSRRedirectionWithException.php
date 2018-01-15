<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionWithException
 *
 * CommPilot Express SR type to transfer to voice mail or forward to a number
 *         with certain exceptions used in the context of a get.
 */
class CommPilotExpressSRRedirectionWithException
{

    /**
     * @ElementName sendCallsToVoiceMailExceptExcludedNumbers
     * @var bool|null
     */
    private $sendCallsToVoiceMailExceptExcludedNumbers = null;

    /**
     * @ElementName excludedPhoneNumber01
     * @var string|null
     */
    private $excludedPhoneNumber01 = null;

    /**
     * @ElementName excludedPhoneNumber02
     * @var string|null
     */
    private $excludedPhoneNumber02 = null;

    /**
     * @ElementName excludedPhoneNumber03
     * @var string|null
     */
    private $excludedPhoneNumber03 = null;

    /**
     * @ElementName forwardExcludedNumbersTo
     * @var string|null
     */
    private $forwardExcludedNumbersTo = null;

    /**
     * Getter for sendCallsToVoiceMailExceptExcludedNumbers
     *
     * @ElementName sendCallsToVoiceMailExceptExcludedNumbers
     * @return bool|null
     */
    public function getSendCallsToVoiceMailExceptExcludedNumbers()
    {
        return $this->sendCallsToVoiceMailExceptExcludedNumbers;
    }

    /**
     * Setter for sendCallsToVoiceMailExceptExcludedNumbers
     *
     * @ElementName sendCallsToVoiceMailExceptExcludedNumbers
     * @param bool|null $sendCallsToVoiceMailExceptExcludedNumbers
     * @return $this
     */
    public function setSendCallsToVoiceMailExceptExcludedNumbers($sendCallsToVoiceMailExceptExcludedNumbers)
    {
        $this->sendCallsToVoiceMailExceptExcludedNumbers = $sendCallsToVoiceMailExceptExcludedNumbers;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber01
     *
     * @ElementName excludedPhoneNumber01
     * @return string|null
     */
    public function getExcludedPhoneNumber01()
    {
        return $this->excludedPhoneNumber01;
    }

    /**
     * Setter for excludedPhoneNumber01
     *
     * @ElementName excludedPhoneNumber01
     * @param string|null $excludedPhoneNumber01
     * @return $this
     */
    public function setExcludedPhoneNumber01($excludedPhoneNumber01)
    {
        $this->excludedPhoneNumber01 = $excludedPhoneNumber01;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber02
     *
     * @ElementName excludedPhoneNumber02
     * @return string|null
     */
    public function getExcludedPhoneNumber02()
    {
        return $this->excludedPhoneNumber02;
    }

    /**
     * Setter for excludedPhoneNumber02
     *
     * @ElementName excludedPhoneNumber02
     * @param string|null $excludedPhoneNumber02
     * @return $this
     */
    public function setExcludedPhoneNumber02($excludedPhoneNumber02)
    {
        $this->excludedPhoneNumber02 = $excludedPhoneNumber02;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber03
     *
     * @ElementName excludedPhoneNumber03
     * @return string|null
     */
    public function getExcludedPhoneNumber03()
    {
        return $this->excludedPhoneNumber03;
    }

    /**
     * Setter for excludedPhoneNumber03
     *
     * @ElementName excludedPhoneNumber03
     * @param string|null $excludedPhoneNumber03
     * @return $this
     */
    public function setExcludedPhoneNumber03($excludedPhoneNumber03)
    {
        $this->excludedPhoneNumber03 = $excludedPhoneNumber03;
        return $this;
    }

    /**
     * Getter for forwardExcludedNumbersTo
     *
     * @ElementName forwardExcludedNumbersTo
     * @return string|null
     */
    public function getForwardExcludedNumbersTo()
    {
        return $this->forwardExcludedNumbersTo;
    }

    /**
     * Setter for forwardExcludedNumbersTo
     *
     * @ElementName forwardExcludedNumbersTo
     * @param string|null $forwardExcludedNumbersTo
     * @return $this
     */
    public function setForwardExcludedNumbersTo($forwardExcludedNumbersTo)
    {
        $this->forwardExcludedNumbersTo = $forwardExcludedNumbersTo;
        return $this;
    }


}

