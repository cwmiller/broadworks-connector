<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPersonalAssistantModifyRequest
 *
 * Modify system Personal Assistant Parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemPersonalAssistantModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName transferToAttendantKey
     * @var string|null
     */
    private $transferToAttendantKey = null;

    /**
     * @ElementName transferToVoiceMessagingKey
     * @var string|null
     */
    private $transferToVoiceMessagingKey = null;

    /**
     * Getter for transferToAttendantKey
     *
     * @ElementName transferToAttendantKey
     * @return string|null
     */
    public function getTransferToAttendantKey()
    {
        return $this->transferToAttendantKey;
    }

    /**
     * Setter for transferToAttendantKey
     *
     * @ElementName transferToAttendantKey
     * @param string|null $transferToAttendantKey
     * @return $this
     */
    public function setTransferToAttendantKey($transferToAttendantKey)
    {
        $this->transferToAttendantKey = $transferToAttendantKey;
        return $this;
    }

    /**
     * Getter for transferToVoiceMessagingKey
     *
     * @ElementName transferToVoiceMessagingKey
     * @return string|null
     */
    public function getTransferToVoiceMessagingKey()
    {
        return $this->transferToVoiceMessagingKey;
    }

    /**
     * Setter for transferToVoiceMessagingKey
     *
     * @ElementName transferToVoiceMessagingKey
     * @param string|null $transferToVoiceMessagingKey
     * @return $this
     */
    public function setTransferToVoiceMessagingKey($transferToVoiceMessagingKey)
    {
        $this->transferToVoiceMessagingKey = $transferToVoiceMessagingKey;
        return $this;
    }


}

