<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceModify
 *
 * Contains the music on hold user source configuration.
 */
class MusicOnHoldUserSourceModify
{

    /**
     * @ElementName messageSourceSelection
     * @var string|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify\CustomSource|null
     */
    private $customSource = null;

    /**
     * Getter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @return string|null
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @param string|null $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection($messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * Getter for customSource
     *
     * @ElementName customSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify\CustomSource|null
     */
    public function getCustomSource()
    {
        return $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @ElementName customSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify\CustomSource|null $customSource
     * @return $this
     */
    public function setCustomSource($customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }


}

