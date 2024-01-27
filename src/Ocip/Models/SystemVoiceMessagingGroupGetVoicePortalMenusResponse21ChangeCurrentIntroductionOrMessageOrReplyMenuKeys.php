<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1049","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
{
    /**
     * @ElementName endRecording
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1049
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $endRecording = null;

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

