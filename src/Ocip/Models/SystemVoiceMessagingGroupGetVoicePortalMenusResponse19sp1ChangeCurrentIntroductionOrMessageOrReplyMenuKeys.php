<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:38929","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
{
    /**
     * @ElementName endRecording
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:38929
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

