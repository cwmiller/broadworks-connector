<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceModify16
 *
 * Contains the music on hold user source configuration.
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19547","type":"sequence"}]
 */
class MusicOnHoldUserSourceModify16
{
    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19547
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify16CustomSource
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19547
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify16CustomSource|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify16CustomSource
     */
    public function getCustomSource()
    {
        return $this->customSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify16CustomSource $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify16CustomSource $customSource)
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

