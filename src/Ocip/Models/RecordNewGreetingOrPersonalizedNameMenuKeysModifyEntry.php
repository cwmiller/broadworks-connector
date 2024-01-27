<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordNewGreetingOrPersonalizedNameMenuKeysModifyEntry
 *
 * The voice portal record new greeting or personalized name menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2952","type":"sequence"}]
 */
class RecordNewGreetingOrPersonalizedNameMenuKeysModifyEntry
{
    /**
     * @ElementName endRecording
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2952
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

