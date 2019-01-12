<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressRedirectionWithExceptionModify
 *
 * CommPilot Express type to transfer to voice mail or forward to a number
 *         with certain exceptions used in the context of a modify.
 *
 * @Groups [{"id":"8c204d784d1904d9eeea996d46de69be:244","type":"sequence"}]
 */
class CommPilotExpressRedirectionWithExceptionModify
{

    /**
     * @ElementName sendCallsToVoiceMailExceptExcludedNumbers
     * @Type bool
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:244
     * @var bool|null
     */
    private $sendCallsToVoiceMailExceptExcludedNumbers = null;

    /**
     * @ElementName excludedPhoneNumber01
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:244
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $excludedPhoneNumber01 = null;

    /**
     * @ElementName excludedPhoneNumber02
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:244
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $excludedPhoneNumber02 = null;

    /**
     * @ElementName excludedPhoneNumber03
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:244
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $excludedPhoneNumber03 = null;

    /**
     * @ElementName forwardExcludedNumbersTo
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:244
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardExcludedNumbersTo = null;

    /**
     * Getter for sendCallsToVoiceMailExceptExcludedNumbers
     *
     * @return bool
     */
    public function getSendCallsToVoiceMailExceptExcludedNumbers()
    {
        return $this->sendCallsToVoiceMailExceptExcludedNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendCallsToVoiceMailExceptExcludedNumbers;
    }

    /**
     * Setter for sendCallsToVoiceMailExceptExcludedNumbers
     *
     * @param bool $sendCallsToVoiceMailExceptExcludedNumbers
     * @return $this
     */
    public function setSendCallsToVoiceMailExceptExcludedNumbers($sendCallsToVoiceMailExceptExcludedNumbers)
    {
        $this->sendCallsToVoiceMailExceptExcludedNumbers = $sendCallsToVoiceMailExceptExcludedNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendCallsToVoiceMailExceptExcludedNumbers()
    {
        $this->sendCallsToVoiceMailExceptExcludedNumbers = null;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber01
     *
     * @return string|null
     */
    public function getExcludedPhoneNumber01()
    {
        return $this->excludedPhoneNumber01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludedPhoneNumber01;
    }

    /**
     * Setter for excludedPhoneNumber01
     *
     * @param string|null $excludedPhoneNumber01
     * @return $this
     */
    public function setExcludedPhoneNumber01($excludedPhoneNumber01)
    {
        if ($excludedPhoneNumber01 === null) {
            $this->excludedPhoneNumber01 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->excludedPhoneNumber01 = $excludedPhoneNumber01;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludedPhoneNumber01()
    {
        $this->excludedPhoneNumber01 = null;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber02
     *
     * @return string|null
     */
    public function getExcludedPhoneNumber02()
    {
        return $this->excludedPhoneNumber02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludedPhoneNumber02;
    }

    /**
     * Setter for excludedPhoneNumber02
     *
     * @param string|null $excludedPhoneNumber02
     * @return $this
     */
    public function setExcludedPhoneNumber02($excludedPhoneNumber02)
    {
        if ($excludedPhoneNumber02 === null) {
            $this->excludedPhoneNumber02 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->excludedPhoneNumber02 = $excludedPhoneNumber02;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludedPhoneNumber02()
    {
        $this->excludedPhoneNumber02 = null;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber03
     *
     * @return string|null
     */
    public function getExcludedPhoneNumber03()
    {
        return $this->excludedPhoneNumber03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludedPhoneNumber03;
    }

    /**
     * Setter for excludedPhoneNumber03
     *
     * @param string|null $excludedPhoneNumber03
     * @return $this
     */
    public function setExcludedPhoneNumber03($excludedPhoneNumber03)
    {
        if ($excludedPhoneNumber03 === null) {
            $this->excludedPhoneNumber03 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->excludedPhoneNumber03 = $excludedPhoneNumber03;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludedPhoneNumber03()
    {
        $this->excludedPhoneNumber03 = null;
        return $this;
    }

    /**
     * Getter for forwardExcludedNumbersTo
     *
     * @return string|null
     */
    public function getForwardExcludedNumbersTo()
    {
        return $this->forwardExcludedNumbersTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardExcludedNumbersTo;
    }

    /**
     * Setter for forwardExcludedNumbersTo
     *
     * @param string|null $forwardExcludedNumbersTo
     * @return $this
     */
    public function setForwardExcludedNumbersTo($forwardExcludedNumbersTo)
    {
        if ($forwardExcludedNumbersTo === null) {
            $this->forwardExcludedNumbersTo = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardExcludedNumbersTo = $forwardExcludedNumbersTo;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardExcludedNumbersTo()
    {
        $this->forwardExcludedNumbersTo = null;
        return $this;
    }


}

