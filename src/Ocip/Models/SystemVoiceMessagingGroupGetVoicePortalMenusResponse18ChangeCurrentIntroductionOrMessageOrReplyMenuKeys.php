<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
{

    /**
     * @ElementName endRecording
     * @Type string
     * @var string|null
     */
    private $endRecording = null;

    /**
     * Getter for endRecording
     *
     * @return string
     */
    public function getEndRecording()
    {
        return $this->endRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endRecording;
    }

    /**
     * Setter for endRecording
     *
     * @param string $endRecording
     * @return $this
     */
    public function setEndRecording($endRecording)
    {
        $this->endRecording = $endRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndRecording()
    {
        $this->endRecording = null;
        return $this;
    }


}

