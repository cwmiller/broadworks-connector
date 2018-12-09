<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetPhoneNumberResponse
 *
 * Response to the UserSimultaneousRingFamilyGetPhoneNumberRequest.
 *
 * @see UserSimultaneousRingFamilyGetPhoneNumberRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:37194","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetPhoneNumberResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:37194
     * @var bool|null
     */
    private $answerConfirmationRequired = null;

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

