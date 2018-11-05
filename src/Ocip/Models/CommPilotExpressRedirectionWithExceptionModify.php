<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressRedirectionWithExceptionModify
 *
 * CommPilot Express type to transfer to voice mail or forward to a number
 *         with certain exceptions used in the context of a modify.
 */
class CommPilotExpressRedirectionWithExceptionModify
{

    /**
     * @ElementName sendCallsToVoiceMailExceptExcludedNumbers
     * @var bool|null
     */
    private $sendCallsToVoiceMailExceptExcludedNumbers = null;

    /**
     * @ElementName excludedPhoneNumber01
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $excludedPhoneNumber01 = null;

    /**
     * @ElementName excludedPhoneNumber02
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $excludedPhoneNumber02 = null;

    /**
     * @ElementName excludedPhoneNumber03
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $excludedPhoneNumber03 = null;

    /**
     * @ElementName forwardExcludedNumbersTo
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExcludedPhoneNumber01()
    {
        return $this->excludedPhoneNumber01;
    }

    /**
     * Setter for excludedPhoneNumber01
     *
     * @ElementName excludedPhoneNumber01
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $excludedPhoneNumber01
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExcludedPhoneNumber02()
    {
        return $this->excludedPhoneNumber02;
    }

    /**
     * Setter for excludedPhoneNumber02
     *
     * @ElementName excludedPhoneNumber02
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $excludedPhoneNumber02
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExcludedPhoneNumber03()
    {
        return $this->excludedPhoneNumber03;
    }

    /**
     * Setter for excludedPhoneNumber03
     *
     * @ElementName excludedPhoneNumber03
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $excludedPhoneNumber03
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getForwardExcludedNumbersTo()
    {
        return $this->forwardExcludedNumbersTo;
    }

    /**
     * Setter for forwardExcludedNumbersTo
     *
     * @ElementName forwardExcludedNumbersTo
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $forwardExcludedNumbersTo
     * @return $this
     */
    public function setForwardExcludedNumbersTo($forwardExcludedNumbersTo)
    {
        $this->forwardExcludedNumbersTo = $forwardExcludedNumbersTo;
        return $this;
    }


}

