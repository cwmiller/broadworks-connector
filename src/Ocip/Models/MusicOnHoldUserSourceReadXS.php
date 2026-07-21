<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceReadXS
 *
 * Contains the music on hold user source configuration.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4662","type":"sequence"}]
 */
class MusicOnHoldUserSourceReadXS
{
    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4662
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXSCustomSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4662
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXSCustomSource|null
     */
    protected $customSource = null;

    /**
     * Getter for messageSourceSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection $messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageSourceSelection()
    {
        $this->messageSourceSelection = null;
        return $this;
    }

    /**
     * Getter for customSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXSCustomSource
     */
    public function getCustomSource()
    {
        return $this->customSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXSCustomSource $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXSCustomSource $customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomSource()
    {
        $this->customSource = null;
        return $this;
    }
}

