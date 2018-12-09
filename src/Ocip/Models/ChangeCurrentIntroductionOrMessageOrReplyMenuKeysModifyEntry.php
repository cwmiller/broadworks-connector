<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChangeCurrentIntroductionOrMessageOrReplyMenuKeysModifyEntry
 *
 * The voice portal change current introduction or message or reply menu keys modify entry.
 *
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:2323","type":"sequence"}]
 */
class ChangeCurrentIntroductionOrMessageOrReplyMenuKeysModifyEntry
{

    /**
     * @ElementName endRecording
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2323
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

