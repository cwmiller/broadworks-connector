<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetPhoneNumberResponse
 *
 * Response to the UserSimultaneousRingFamilyGetPhoneNumberRequest.
 *
 * @see UserSimultaneousRingFamilyGetPhoneNumberRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47173","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetPhoneNumberResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47173
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

