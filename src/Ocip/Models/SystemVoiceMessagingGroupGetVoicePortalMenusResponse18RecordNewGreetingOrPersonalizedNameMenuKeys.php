<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18RecordNewGreetingOrPersonalizedNameMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18RecordNewGreetingOrPersonalizedNameMenuKeys
{

    /**
     * @ElementName endRecording
     * @var string|null
     */
    private $endRecording = null;

    /**
     * Getter for endRecording
     *
     * @ElementName endRecording
     * @return string|null
     */
    public function getEndRecording()
    {
        return $this->endRecording;
    }

    /**
     * Setter for endRecording
     *
     * @ElementName endRecording
     * @param string|null $endRecording
     * @return $this
     */
    public function setEndRecording($endRecording)
    {
        $this->endRecording = $endRecording;
        return $this;
    }


}

