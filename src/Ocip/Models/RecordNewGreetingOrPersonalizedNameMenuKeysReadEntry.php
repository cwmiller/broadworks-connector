<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordNewGreetingOrPersonalizedNameMenuKeysReadEntry
 *
 * The voice portal record new greeting or personalized name menu keys.
 *
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:2902","type":"sequence"}]
 */
class RecordNewGreetingOrPersonalizedNameMenuKeysReadEntry
{

    /**
     * @ElementName endRecording
     * @Type string
     * @Group 80c5986946137c505e41f6008c7f75a8:2902
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

