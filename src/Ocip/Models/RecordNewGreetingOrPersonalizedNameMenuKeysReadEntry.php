<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordNewGreetingOrPersonalizedNameMenuKeysReadEntry
 *
 * The voice portal record new greeting or personalized name menu keys.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2957","type":"sequence"}]
 */
class RecordNewGreetingOrPersonalizedNameMenuKeysReadEntry
{

    /**
     * @ElementName endRecording
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2957
     * @Length 1
     * @Pattern [0-9]|\*|#
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

