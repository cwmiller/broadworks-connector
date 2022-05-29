<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SimultaneousRingNumber
 *
 * Simultaneous Ring number entry.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4606","type":"sequence"}]
 */
class SimultaneousRingNumber
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4606
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4606
     * @var bool|null
     */
    protected $answerConfirmationRequired = null;

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

