<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingPersonalGetPhoneNumberResponse
 *
 * Response to the UserSimultaneousRingPersonalGetPhoneNumberRequest.
 *
 * @see UserSimultaneousRingPersonalGetPhoneNumberRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47365","type":"sequence"}]
 */
class UserSimultaneousRingPersonalGetPhoneNumberResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47365
     * @var bool|null
     */
    protected $answerConfirmationRequired = null;

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

