<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPersonalAssistantGetResponse
 *
 * Response to the SystemPersonalAssistantGetRequest.
 *         Returns system Personal Assistant Parameters.
 *
 * @see SystemPersonalAssistantGetRequest
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:69","type":"sequence"}]
 */
class SystemPersonalAssistantGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName transferToAttendantKey
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:69
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $transferToAttendantKey = null;

    /**
     * @ElementName transferToVoiceMessagingKey
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:69
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $transferToVoiceMessagingKey = null;

    /**
     * Getter for transferToAttendantKey
     *
     * @return string
     */
    public function getTransferToAttendantKey()
    {
        return $this->transferToAttendantKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToAttendantKey;
    }

    /**
     * Setter for transferToAttendantKey
     *
     * @param string $transferToAttendantKey
     * @return $this
     */
    public function setTransferToAttendantKey($transferToAttendantKey)
    {
        $this->transferToAttendantKey = $transferToAttendantKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferToAttendantKey()
    {
        $this->transferToAttendantKey = null;
        return $this;
    }

    /**
     * Getter for transferToVoiceMessagingKey
     *
     * @return string
     */
    public function getTransferToVoiceMessagingKey()
    {
        return $this->transferToVoiceMessagingKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToVoiceMessagingKey;
    }

    /**
     * Setter for transferToVoiceMessagingKey
     *
     * @param string $transferToVoiceMessagingKey
     * @return $this
     */
    public function setTransferToVoiceMessagingKey($transferToVoiceMessagingKey)
    {
        $this->transferToVoiceMessagingKey = $transferToVoiceMessagingKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferToVoiceMessagingKey()
    {
        $this->transferToVoiceMessagingKey = null;
        return $this;
    }
}

