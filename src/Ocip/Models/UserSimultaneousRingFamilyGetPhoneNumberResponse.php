<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetPhoneNumberResponse
 *
 * Response to the UserSimultaneousRingFamilyGetPhoneNumberRequest.
 *
 * @see UserSimultaneousRingFamilyGetPhoneNumberRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16969","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetPhoneNumberResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16969
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

