<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceRead
 *
 * Contains the music on hold user source configuration.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:50193","type":"sequence"}]
 */
class MusicOnHoldUserSourceRead
{
    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection
     * @Group d8f04177e438f303b41c211e518706bf:50193
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadCustomSource
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:50193
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadCustomSource|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadCustomSource
     */
    public function getCustomSource()
    {
        return $this->customSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadCustomSource $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadCustomSource $customSource)
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

