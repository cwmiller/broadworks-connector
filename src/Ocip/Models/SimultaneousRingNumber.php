<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SimultaneousRingNumber
 *
 * Simultaneous Ring number entry.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:3476","type":"sequence"}]
 */
class SimultaneousRingNumber
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:3476
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group 18b369af88e42ffdb4166615c670ce2c:3476
     * @var bool|null
     */
    private $answerConfirmationRequired = null;

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

