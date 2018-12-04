<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecordNewGreetingOrPersonalizedNameMenuKeysReadEntry
 *
 * The voice portal record new greeting or personalized name menu keys.
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:2902","type":"sequence"}]
 */
class RecordNewGreetingOrPersonalizedNameMenuKeysReadEntry
{

    /**
     * @ElementName endRecording
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2902
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

