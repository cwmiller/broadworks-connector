<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPersonalAssistantGetResponse
 *
 * Response to the SystemPersonalAssistantGetRequest.
 *         Returns system Personal Assistant Parameters.
 *
 * @see SystemPersonalAssistantGetRequest
 * @Groups [{"id":"f04e7de96ed87c401bee5b5d2e80ccd3:64","type":"sequence"}]
 */
class SystemPersonalAssistantGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName transferToAttendantKey
     * @Type string
     * @Group f04e7de96ed87c401bee5b5d2e80ccd3:64
     * @var string|null
     */
    private $transferToAttendantKey = null;

    /**
     * @ElementName transferToVoiceMessagingKey
     * @Type string
     * @Group f04e7de96ed87c401bee5b5d2e80ccd3:64
     * @var string|null
     */
    private $transferToVoiceMessagingKey = null;

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

